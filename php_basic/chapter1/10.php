<?php
function myFunction($age){
    echo $age;
}
$name = 'mario';
// function sayHello(){
//     global $name;
//     echo 'hello ' .$name;
// }
// sayHello();
function sayBye($name){
    $name = 'Wario';
    echo "bye " . $name;
}
sayBye($name);