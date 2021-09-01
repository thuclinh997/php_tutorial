<?php
require_once("connect.php");
// var_dump($conn);
$sql = "UPDATE users SET fullname = :fullname, email = :email WHERE id = :id";
//data
$email = "info@gmail.com.vn";
$fullname = "learn PHP dpo";
$id = 7;
try {
    $statement = $conn->prepare($sql);
    // var_dump($statement);
    $statement->bindParam(':fullname', $fullname);
    $statement->bindParam(':email', $email);
    $statement->bindParam(':id', $id);
    // $data = [
    //     'id' => $id,
    //     'fullname' => $fullname,
    //     'email' => $email
    // ];
    $update = $statement->execute();
    var_dump($update);
} catch (Exception $exception) {
    echo $exception->getMessage() . "<br>";
    echo "FILE: " . $exception->getFile() . " - LINE: ", $exception->getLine();
}
