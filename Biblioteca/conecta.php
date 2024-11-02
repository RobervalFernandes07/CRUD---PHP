<?php
$host = "localhost";
$user = "root";
$password = "";
$banco = "biblioteca";

$conn = new mysqli($host, $user, $password, $banco);
if($conn->connect_errno){
    printf("Conect failed: %s\n", $conn->connect_errno);
    exit();
}
?>