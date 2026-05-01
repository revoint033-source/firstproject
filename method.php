<?php
class Student {
    private $name;

    function setName($str){
        $this->name  = $str;

    }
       
     
    
    function getName(){
        return $this->name;

    }
}

$obj1 = new Student(); 
$obj1->setName("raisa");
echo $obj1->getName();


    
?>
