<?php
include('../../connection.php');


//add product 
if ($_SERVER['REQUEST_METHOD'] == "POST") {

    // Fetch form data from POST
    $proName = $_POST['pro_name'];
    $proCategory = $_POST['pro_category'];
    $proPrice = $_POST['pro_price'];
    $proDescription = $_POST['pro_discription'];
    //print_r($_POST); // To see all form data

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



//add category
$message = "";
if (isset($_POST['addCategory'])) {
    $cate_name = $conn->real_escape_string(trim(preg_replace('/\s+/', ' ', strtolower($_POST['cate_name']))));
    $added_on = date('M d, Y');

    if (empty($cate_name)) {
        $message = "* category name is required";
    } else {

        $sql = "INSERT INTO mis_category(cate_name, cate_added_on)VALUES(?,?)";
        $stmt = $conn->prepare($sql);
        if ($stmt) {
            $stmt->bind_param("ss", $cate_name, $added_on);

            if ($stmt->execute()) {
                echo "<script>alert('Category successfully added')</script>";
            } else {
                echo "<script>alert('faliled to add category')</script>";
            }
        } else {
            echo "failed to prepare statemet";
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
    }else{
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
