<?php
include("connection.php");
//retrive product data
if ($_SERVER['REQUEST_METHOD'] == "GET") {

    $sql = "SELECT * FROM mis_product";
    $stmt = $conn->prepare($sql);
    if ($stmt) {
        if ($stmt->execute()) {
            $result = $stmt->get_result();
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    $rows[] = $row;
                }
                header('Content-Type: application/json');

                echo json_encode($rows);
            }
        }
    }
}