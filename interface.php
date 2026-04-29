<?php

interface Student {
    public function getDetails();
}

class FemaleStudent implements Student {
    private $name;

    function __construct($name) {
        $this->name = $name;
    }

    public function getDetails() {
        return "Female Student: " . $this->name;
    }
}

class MaleStudent implements Student {
    private $name;

    function __construct($name) {
        $this->name = $name;
    }

    public function getDetails() {
        return "Male Student: " . $this->name;
    }
}


$female = new FemaleStudent("Ananya");
$male = new MaleStudent("Rini");


echo $female->getDetails();
echo "<br>";
echo $male->getDetails();

?>

