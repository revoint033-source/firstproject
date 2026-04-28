<?php
class Student {
    public $name;
    
    function __construct($str){
     $this->name = $str;
    }


    function getName(){
        return $this->name;
    }
}

class FemaleStudent extends Student {
   

    
}

$obj1 = new FemaleStudent("tanisha");

echo $obj1->getName();
?>
