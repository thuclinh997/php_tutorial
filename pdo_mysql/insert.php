<?php
require_once("connect.php");
// var_dump($conn);
// $sql = "INSERT INTO users(fullname, email, password) VALUE (:fullname, :email, :password)";
$sql = "INSERT INTO users(fullname, email, password) VALUE (?,?,?)";
try {
    $statement = $conn->prepare($sql);
    // gan gia tri du lieu
    $fullname = 'Cao Thuc Linh 2';
    $email = 'thuclinh1998@gmail.com';
    $password = sha1('123');
    // $statement->bindParam(':fullname', $fullname);
    // $statement->bindParam(':email', $email);
    // $statement->bindParam(':password', $password);
    // $statement->execute();
    // $data = [
    //     'fullname' =>$email,
    //     'email' => $email,
    //     'password' => $password
    // ];
    // $statement->execute($data);
    $data = [
        $fullname,
        $email,
        $password
    ];
    $statement->execute($data);
    echo "id vua insert: " . $conn->lastInsertId();
} catch (Exception $exception) {
    echo $exception->getMessage() . "<br>";
    echo "FILE: " . $exception->getFile() . " - LINE: ", $exception->getLine();
}
// var_dump($statement);
