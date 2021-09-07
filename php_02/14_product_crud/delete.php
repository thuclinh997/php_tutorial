<?php
require_once("layouts/connect.php");

if (empty($_POST['delete'])) {
    $id = $_POST['id'];
    $statement = $pdo->prepare("DELETE FROM products WHERE id = :id");
    $statement->bindValue(':id',$id);
    $statement->execute();
}
header("location: index.php");

