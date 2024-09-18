<?php
include('../../connection.php');

$ID = $_GET['id'];

$sql = "DELETE FROM mis_product WHERE pro_id=?";
$stmt = $conn->prepare($sql);
if ($stmt) {
    $stmt->bind_param("i", $ID);
    if ($stmt->execute()) {
        //echo "product delete successfully";
        header('location:../pages/view_product.php');
    } else {
        echo "failed to delete";
    }
}