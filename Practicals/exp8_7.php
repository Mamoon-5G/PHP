<?php
echo "(20461) Siddiqui Mamoon<hr>";

class A{
    public $name;
    public function __construct($n){
        $this->name = $n;
    }
    public function about(){
        echo "Hii ";
    }
}
class B extends A{
    public function message(){
        echo "<br> This is ".$this->name;
    }
}
class C extends A{
    public function surname(){
        echo " World";
    }
}
$a= new B("Hello");
$b= new C("Hii");
$a->about();		
$a->message();
$b->surname();
?>
