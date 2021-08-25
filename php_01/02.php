<?php
$name = 'thuc linh';
$age = 24;
$isMale = true;
$height = 1.65;
$salary = null;
//print types of the variables

echo $name . '<br>';
echo $age . '<br>';
echo $isMale . '<br>';
echo $height . '<br>';
echo $salary . '<br>';
//print types of the variables 
echo gettype($name) . '<br>';
echo gettype($age) . '<br>';
echo gettype($isMale) . '<br>';
echo gettype($height) . '<br>';
echo gettype($salary) . '<br>';
//change the value of the variables
$name = false;
//print type of the variable
echo gettype($name) . '<br>'; //false
//variable checking functions
is_string($name); //false
is_int($age); //true
is_bool($isMale); //true
is_double($height); //true
//check if variable is defined
isset($name); //true
isset($address); //false
//constants
define('PI', 3.14);
echo PI . '<br>';
