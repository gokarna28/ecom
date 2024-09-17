<?php
include('../../connection.php');

$ID = $_GET['id'];

$sql = "DELETE FROM mis_category WHERE id=?";
$stmt = $conn->prepare($sql);
if ($stmt) {
    $stmt->bind_param("i", $ID);
    if ($stmt->execute()) {
        //echo "<script>alert('Successfully Removed')</script>";
        header('location:../pages/add_categories.php');
    } else {
        echo "<script>alert('Failed to delete')</script>";
    }
}else{
    echo "failed to prepare the sql statement";
}