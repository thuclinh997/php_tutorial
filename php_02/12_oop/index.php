
<?php

// What is class and instance
require_once("Person.php");
require_once("Student.php");
// $p = new Person('Brand', "Traversy");
// $p->setAge(12);
// // $p->name = "Linh";
// // $p->surname = "Cao";
// echo '<pre>';
// var_dump($p);
// echo '</pre>';
// echo $p->getAge()."<br>";
// echo Person::$counter;
$student = new Student("thuclinh", "caothuc", 3);
echo "<pre>";
var_dump($student);
echo "</pre>";


// $p2 = new Person;
// $p2->name = "Jonh";
// $p2->surname = "Smith";
// echo '<pre>';
// var_dump($p2);
// echo '</pre>';
// Create Person class in Person.php

// Create instance of Person

// Using setter and getter