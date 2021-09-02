<?php
require_once('../pdo_mysql/connect.php');
require_once('function.php');
$dataInsert = [
    'fullname' => 'nguyen thi ngoc',
    'email' => 'ngoc123@gmail.com',
    'password' => sha1('1234')
];
// insert('users',$dataInsert);
$dataUpdate = [
    'fullname' => 'thuc linh',
    'email' => 'thuclinhPHP@gmail.com',
    'password' => sha1('123')
];
$condition = "id = 32";
update('users', $dataUpdate, $condition);
// $delete = delete('users',$condition);
// var_dump($delete);
$data = getRow("SELECT * FROM users");
// print_r($data);
$firstData = firstRow("SELECT * FROM users");
// print_r($firstData);