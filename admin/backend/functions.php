<?php
include('../../connection.php');


//add product 
if ($_SERVER['REQUEST_METHOD'] == "POST") {

    // Fetch form data from POST
    $proName = $_POST['pro_name'];
    $proCategory = $_POST['pro_category'];
    $proPrice = $_POST['pro_price'];
    $proDescription = $_POST['pro_discription'];
    //print_r($_POST); 
    //upload image
    $tempname = $_FILES['pro_image']['tmp_name'];
    $filename = $_FILES['pro_image']['name'];
    $folder = "../assets/images/uploads/" . $filename;
    //upload the file
    move_uploaded_file($tempname, $folder);
    $added_on = date('M d, Y');

    $sql = "INSERT INTO mis_product (pro_name, pro_category, pro_price, pro_image, pro_discription, pro_added_on)
    VALUES(?,?,?,?,?,?)";
    $stmt = $conn->prepare($sql);
    if ($stmt) {
        $stmt->bind_param("siisss", $proName, $proCategory, $proPrice, $folder, $proDescription, $added_on);
        if ($stmt->execute()) {
            echo "Product added successfully";
        } else {
            echo "Failed to add the product";
        }
    }
}

//categpory name and id retrive for the product form dropdown
if ($_SERVER['REQUEST_METHOD'] == "GET" && isset($_GET['type']) && $_GET['type'] === 'categories') {

    $sql = "SELECT cate_name, cate_id FROM mis_category";
    $stmt = $conn->prepare($sql);
    if ($stmt) {
        $stmt->execute();
        $result = $stmt->get_result();
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $categories[] = $row;
            }
            header('Content-Type: application/json');
            echo json_encode($categories);
        } else {
            echo "no category";
        }
    } else {
        echo "failed to prepare the statement";
    }
}

//Retrive Product data 
if ($_SERVER['REQUEST_METHOD'] == "GET" && isset($_GET['type']) && $_GET['type'] === 'products') {

    $sql = "SELECT * FROM
    mis_product p
    INNER JOIN mis_category c ON p.pro_category=c.cate_id
    ORDER BY pro_id DESC";
    $stmt = $conn->prepare($sql);
    if ($stmt) {
        $stmt->execute();
        $result = $stmt->get_result();
        if ($result->num_rows > 0) {
            $n = 1;
            while ($row = $result->fetch_assoc()) {
                $product[] = $row;
            }
            header('Content-Type: application/json');

            echo json_encode($product);
        } else {
            echo "no product";
        }
    }
}


//get the all the data form category and products for update form
if ($_SERVER['REQUEST_METHOD'] == "GET" && isset($_GET['type']) && $_GET['type'] === 'productscategories') {

    // Fetch categories
    $sqlCategories = "SELECT * FROM mis_category";
    $stmtCategories = $conn->prepare($sqlCategories);

    $categories = [];
    if ($stmtCategories) {
        $stmtCategories->execute();
        $resultCategories = $stmtCategories->get_result();

        if ($resultCategories->num_rows > 0) {
            while ($row = $resultCategories->fetch_assoc()) {
                $categories[] = $row;
            }
        }
    }

    // Fetch products
    $sqlProducts = "SELECT * FROM mis_product";
    $stmtProducts = $conn->prepare($sqlProducts);

    $products = [];
    if ($stmtProducts) {
        $stmtProducts->execute();
        $resultProducts = $stmtProducts->get_result();

        if ($resultProducts->num_rows > 0) {
            while ($row = $resultProducts->fetch_assoc()) {
                $products[] = $row;
            }
        }
    }

    // Send a combined response
    header('Content-Type: application/json');
    echo json_encode([
        'categories' => $categories,
        'products' => $products
    ]);
}

// add categories
if ($_SERVER['REQUEST_METHOD'] == "POST" && $_POST['type']=='addCategory') {

    echo $cate_name=$_POST['cate_name'];
    echo $added_on = date('M d, Y');

    // $data = json_decode(file_get_contents('php://input'), true);
    // print_r($data);

    // $sql = "INSERT INTO mis_category(cate_name, cate_addedPon) VALUES(?,?,?)";
    // $stmt = $conn->prepare($sql);
    // if ($stmt) {
    //     $stmt->bind_param("ss", $cate_name, $added_on);

    //     if ($stmt->execute()) {
    //         echo "successfully added category";
    //     } else {
    //         echo "Failed to add the category";
    //     }
    // } else {
    //     echo "something went wrong";
    // }

}
