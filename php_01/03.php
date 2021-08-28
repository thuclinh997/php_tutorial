<?php
//Declaring numbers
$a = 5;
$b = 4;
$c = 1.2;
//Arithmatic operators
echo ($a + $b) * $c . '<br>';
echo $a - $b . '<br>';
echo $a * $b . '<br>';
echo $a / $b . '<br>';
echo $a % $b . '<br>';
//Assignment with math operators
$a += $b;
echo $a . '<br>';
$a -= $b;
echo $a . '<br>';
$a *= $b;
echo $a . '<br>';
$a /= $b;
echo $a . '<br>';
$a %= $b;
echo $a . '<br>';
//Increment operator
echo $a++ . '<br>';
echo ++$a . '<br>';
echo $a-- . '<br>';
echo --$a . '<br>';
//Number checking functions
is_float(1.25); //true
is_double(1.5); //true
is_int(5); //true
is_numeric("3.5"); //true
is_numeric("4.6h"); //false
//Conversion
$strNumber = '12.34';
$number = (int)$strNumber;
var_dump($number) . "<br>";
//Number function
//abs
//pow
//sqrt
//max
//min
//round
//floor
//ceil
//Formatting number
$number = 12345678912345;
echo "formating number" . number_format($number,2);
