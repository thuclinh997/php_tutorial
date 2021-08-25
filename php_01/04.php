<?php
//Create simple string
$name = 'Suka';
$string = 'hello I am ' . $name . '. I am 24';
$string2 = "hello" . $name;
echo $string . '<br>';
echo $string2 . '<br>';
$string3 = "Xin cHao tHe GiOi";
//String concatenation
echo 'Hello ' . 'world' . ' and PHP' . '<br>';
echo ucwords('hello world') . '<br>';
$string3 = strtolower($string3) . '<br>';
echo ucfirst($string3) . '<br>';
