<?php
echo "(20461) Siddiqui Mamoon<hr>";
abstract class student { 
    public $name;
    public function __construct($name) {
        $this->name = $name; 
    }
    abstract public function intro() : string; 
}
class computer extends student {
    public function intro() : string 
    {
        return "Hello! This is $this->name, I am from The Avengers!"; 
    }
}
$stud = new computer("Tony ");
echo $stud->intro();
?>
