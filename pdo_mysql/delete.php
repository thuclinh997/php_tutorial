<?php
require_once("connect.php");
$id = 14;
$sql = "DELETE FROM users WHERE id = ?";
try {
    $statement = $conn->prepare($sql);
    $data = [$id];
    $delete = $statement->execute($data);
    var_dump($delete);
} catch (Exception $exception) {
    echo $exception->getMessage() . "<br>";
    echo "FILE: " . $exception->getFile() . " - LINE: ", $exception->getLine();
}
