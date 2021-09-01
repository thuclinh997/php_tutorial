<?php
// $dataOpject = new DateTime();
// //goi hang so
// echo $dataOpject::RSS . "<br>";
// echo $dataOpject::COOKIE . "<br>";
// //goi phuong thuc
// echo $dataOpject->format('d/m/y H:i:s') . "<br>";
//error in php
//PARSE: loi cu phap
//PARTAL: loi do khong bien dich duoc
//WARNING: loi canh bao khong nghiem trong
//NOTICE: loi khong nghiem trong giong warning
//1. parse
// echo 'thuclinh' //=>thieu dau ';'.
//2 partal
// echo "loi bien dich";
// echo "<br>";
// sumNumber(); // chuong trinh se dung ngay tai loi nay
//WARNING
// include ('101.php'); // canh bao khong co file nay va tiep tuc chay chuong trinh
// require ('101.php');
// echo "loi canh bao notice <br>";
// echo $number;
// $arr = [];
// echo $arr[0];
// xy ly ngoai le try catch
//la qua trinh xu ly cac loi giup chuong trinh van hoat dong binh thuong
//cu phap try{} catch(){}
echo "hoc lap trinh php <br>";
try {
    //tat ca code thuc thi se viet o day

    sumNumber();
} catch (Error $exception) {
    echo $exception->getMessage() . "<br>";
    // echo $exception->getCode() . "<br>";
    echo "Line: " . $exception->getLine() . "<br>";
}

echo "dong code tiep theo <br>";
