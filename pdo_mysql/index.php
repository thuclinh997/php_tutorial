<?php
require_once("connect.php");
//1truy van tat ca du lieu
// $sql = "SELECT * FROM users";
// $id = 8;
// try {
//     $statement = $conn->prepare($sql);
//     // $dataParam = [$id];
//     // var_dump($statement);
//     $statement->execute();
//     $data = $statement->fetchAll(PDO::FETCH_ASSOC);
//     print_r($data);
// } catch (Exception $exception) {
//     echo $exception->getMessage() . "<br>";
//     echo "File: " . $exception->getFile() . " - LINE: " . $exception->getLine();
// }
//2truy van 1 hang du lieu
// $sql = "SELECT * FROM users WHERE id = ?";
// $id = 8;
// try {
//     $statement = $conn->prepare($sql);
//     $dataParam = [$id];
//     // var_dump($statement);
//     $statement->execute($dataParam);
//     $data = $statement->fetch(PDO::FETCH_ASSOC);
//     print_r($data);
// } catch (Exception $exception) {
//     echo $exception->getMessage() . "<br>";
//     echo "File: " . $exception->getFile() . " - LINE: " . $exception->getLine();
// }
//3 lay so hang cua cau lenh truy van
$sql = "SELECT * FROM users";
try {
    $statement = $conn->prepare($sql);
    // var_dump($statement);
    $statement->execute();
    // $data = $statement->fetchAll(PDO::FETCH_ASSOC);
    // echo count($data);
    $countUser = $statement->rowCount();
    echo "so hang: " . $countUser;
} catch (Exception $exception) {
    echo $exception->getMessage() . "<br>";
    echo "File: " . $exception->getFile() . " - LINE: " . $exception->getLine();
}
