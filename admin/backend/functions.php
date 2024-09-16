<?php
include('../../connection.php');


//add product 
if (isset($_POST['addProduct'])) {

    // image upload
    $filename = $_FILES["pro_image"]["name"];
    $tempname = $_FILES["pro_image"]["tmp_name"];
    $folder = "../assets/images/uploads/" . $filename;
    move_uploaded_file($tempname, $folder);

    $name = $conn->real_escape_string($_POST['pro_name']);
    $category = $conn->real_escape_string($_POST['category']);
    $price = $conn->real_escape_string($_POST['pro_price']);
    $discription = $conn->real_escape_string($_POST['discription']);
    $added_on = date('M d, Y');

    // if (empty($name) || empty($category) || empty($price) || empty($discription)) {
    //     $message = 'filds are required';
    // } else {


    $sql = "INSERT INTO mis_product (pro_name, pro_category, pro_price, pro_image, pro_discription, pro_added_on)
    VALUES(?,?,?,?,?,?)";
    $stmt = $conn->prepare($sql);
    if ($stmt) {
        $stmt->bind_param("siisss", $name, $category, $price, $folder, $discription, $added_on);
        if ($stmt->execute()) {
            echo "<script>alert('Product added successfully ')</script>";
        } else {
            echo "<script>alert('failed to add the product')</script>";
        }
    } else {
        echo "failed to prepare the statement";
    }
}

// }

//add category
$message = "";
if (isset($_POST['addCategory'])) {
    $cate_name = $conn->real_escape_string($_POST['cate_name']);
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

//Retrve the category data form database
function get_categories()
{
    include('../../connection.php');

    $sql = "SELECT * FROM mis_category ORDER BY id DESC";
    $stmt = $conn->prepare($sql);
    if ($stmt) {
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            $num = 1;
            while ($row = $result->fetch_assoc()) {
                ?>
                <tr class="border-t border-slate-400 hover:bg-gray-400">
                    <td class="border p-4"><?php echo $num++ ?></td>
                    <td class="border p-4"><?php echo $row['cate_name'] ?></td>
                    <td class="border p-4"><?php echo $row['cate_added_on'] ?></td>
                    <td class="border p-4"><?php echo $row['cate_updated_on'] ?></td>
                    <td class="border p-4">
                        <button class="bg-stone-800 text-white px-4 py-1 rounded hover:bg-blue-700">Update</button>
                        <button class="bg-stone-600 text-white px-4 py-1 rounded hover:bg-red-700">Delete</button>
                    </td>
                </tr>
                <?php
            }
        }
    }

}
