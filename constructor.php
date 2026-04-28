

 <?php
class Student {
    public $name;

    function __construct($str1) {
    $this->name= $str1;
    
       
     
    }
    function herName(){
        return $this->name;

    }
}

$obj1 = new Student("wasima" );   
echo $obj1->herName();


    
?>

