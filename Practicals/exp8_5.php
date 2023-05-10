<?php
echo "(20461) Siddiqui Mamoon<hr>";
class A{
    public $name;
    public function __construct($n){
        $this -> name = $n;
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
class C extends B{
    public function surname(){
        echo " Siddiqui";
    }
}  
$a = new C("Mamoon");
$a -> about();
$a -> message();
$a -> surname();
?>
