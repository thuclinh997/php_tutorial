<?php
include("connect.php");
$id = $_GET['id'];
$sql = "DELETE FROM users WHERE id = ?";
try{
    $query = $conn->prepare($sql);
    $data = [$id];
    $query->execute($data);
    header("location:index.php");
    // echo $id;
}catch(Exception $exception){
    echo $exception->getMessage();
}