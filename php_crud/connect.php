<?php
// user, localhost, dbname, pass
const _HOST = 'localhost';
const _USER = 'root';
const _PASS = '';
const _DB_NAME = 'crud_pdo';
try{
    $conn = new PDO('mysql:host=' . _HOST .";". 'dbname=' . _DB_NAME, _USER, _PASS);
    //set the PDO error mote to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(Exception $exception){
    echo $exception->getMessage();
}