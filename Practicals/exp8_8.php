<?php
echo "(20461) Siddiqui Mamoon<hr>";
class student{
    public $name;
    function __construct($name){
        $this->name= $name;
    }
    function __destruct(){
        echo "The student's name is {$this->name}.";
    }
}
$a= new student("Peter Parker");
?>
