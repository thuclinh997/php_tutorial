<?php
//create array
// $fruits = ["banana", "apple", "orange"];
// //print the whole array
// echo "<pre>";
// var_dump($fruits);
// echo "</pre>";
// //get element by index
// echo $fruits[2] . "<br>";
// $fruits[0] = "Peach";
// echo $fruits[0] . "<br>";
// //check if array has element at index
// isset($fruits[2]); //true
// //append element
// $fruits[] = 'banana';
// //print the element of the array
// echo count($fruits) . "<br>";
// array_push($fruits, 'foo');
// //remove element from the end of the array
// echo array_pop($fruits);
// echo "<pre>";
// var_dump($fruits);
// echo "</pre>";
// //add element at the beginning of the array
// echo array_unshift($fruits, 'bar');
// echo "<pre>";
// var_dump($fruits);
// echo "</pre>";
// //split the string into an array
// $string = "Banana,Apple,Peach";
// echo '<pre>';
// var_dump(explode(',', $string));
// echo '</pre>';
// //combine array element into string
// echo implode("&", $fruits);
// //check if element in the array
// echo "<pre>";
// var_dump(in_array("Mango", $fruits));
// echo "</pre>";
// //search element index in the array
// echo "<pre>";
// var_dump(array_search("apple", $fruits));
// echo "</pre>";
// //merge two arrays
// $vegetable = ["potato", "cucumber"];
// echo "<pre>";
// var_dump(array_merge($fruits, $vegetable));
// echo "</pre>";
//create an assciative array
$persion = [
    'name' => 'Linh',
    "surname" => 'Thuc',
    'age' => 24,
    'hobbies' => ['Tenins', 'video', 'game']
];
//get element by key
echo $persion['name'] . "<br>";
echo "<pre>";
var_dump($persion);
echo "</pre>";
//set element by key

$persion['name']  = "ngoc";
if(!isset($persion['address'])){
    $persion['address'] = 'unknown';
}
$persion['address'] ??= 'unknown';
echo "<pre>";
var_dump($persion);
echo "</pre>";
//print the keys of the array
echo "<pre>";
var_dump(array_values($persion));
echo "</pre>";
