<?php
$peopleOne = ['linh', 'mai', 'hai'];
// echo $peopleOne[1];
$peopleTwo = array('ken', 'chun-li');
// echo $peopleTwo[1];
$ages = [20, 30, 40, 50];
print_r($ages);
echo "chieu dai mang: " . count($ages);
$peopleThree = array_merge($peopleOne, $peopleTwo);
print_r($peopleThree);