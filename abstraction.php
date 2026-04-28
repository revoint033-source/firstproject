<?php

abstract class Student {
    protected $name;

    abstract function getDetails();

    function setName($name) {
        $this->name = $name;
    }
}

class FemaleStudent extends Student {
    function getDetails() {
        return "Female student name:" .$this->name;
    }

}
class MaleStudent extends Student {
    function getDetails() {
        return "Male Student Name: " . $this->name;
    }
}


$female = new FemaleStudent();
$female->setName("Tanisha");

$male = new MaleStudent();
$male->setName("Rahim");

echo $female->getDetails();
echo "<br>";
echo $male->getDetails();

?>