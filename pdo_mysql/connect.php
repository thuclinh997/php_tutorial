<?php
// pdo: PHP DATA OPJECT
const _HOST = 'localhost';
const _USER = 'root';
const _PASS = '';
const _DB = 'php_online';
const _DRIVER = 'mysql';
try {
    if (class_exists('PDO')) {
        $dsn = _DRIVER . ":dbname=" . _DB . ';host=' . _HOST;
        $conn = new PDO($dsn, _USER, _PASS);
        // var_dump($conn);
    }
} catch (Exception $exception) {
    echo "<div style= 'color: red; font-weight:900; font-size:20px; background: yellow; padding: 10px 0px;'>";
    echo $exception->getMessage(). "<br>";
    echo "</div>";
    die();
}
