<?php
$servername='localhost';
$username='root';
$password="";
$dbname="mis";
$port='3306';

$conn=new mysqli($servername, $username, $password, $dbname, $port);

if($conn){
   // echo "connection successfully";
}else{
    echo "failed to connect";
}

?>