<?php
require_once("Person.php");
class Student extends Person
{
    public string $studentId;
    public function __construct($name, $surname, $studentId)
    {
        $this->$studentId = $studentId;
        $this->age = 18;
        parent::__construct($name, $surname);
    }
}
