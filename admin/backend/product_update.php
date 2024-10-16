<?php
include('../../connection.php');

if (isset($_POST['pro_update_form_save'])) {

    //upload image
    $tempname = $_FILES['pro_image_update']['tmp_name'];
    $filename = $_FILES['pro_image_update']['name'];
    $folder = "../assets/images/uploads/" . $filename;
    //upload the file
    move_uploaded_file($tempname, $folder);

    $id = $_POST['pro_id_update'];
    $name = $_POST['pro_name_update'];
    $cate = $_POST['pro_cate_update'];
    $price = $_POST['pro_price_update'];
    $discription = $_POST['pro_discription_update'];

    $updated_on = date('M d, Y');

    $sql = "UPDATE mis_product SET pro_name=?, pro_category=?, pro_price=?, pro_image=?, pro_discription=?, pro_updated_on=?
    WHERE pro_id=?";
    $stmt = $conn->prepare($sql);
    if ($stmt) {
        $stmt->bind_param("siisssi", $name, $cate, $price, $folder, $discription, $updated_on, $id);

        if ($stmt->execute()) {
            echo "<script>alert('successfully updated')</script>";
        } else {
            echo "<script>alert('Failed to updated')</script>";
        }
    } else {
        echo "something went wrong";
    }

}
