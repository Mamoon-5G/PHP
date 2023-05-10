<?php
echo "(20461) Siddiqui Mamoon<hr>";
class A{
    final public function show(){
        echo "<br> I'm Inside Parent Class";
    }
}

class B extends A{
    public function show(){
        /* Here final() function cannot be overriden */
        echo "<br> I'm Inside Child Class";
    }
}
$a=new A();
$b=new B();
$a->show();
$b->show();
?>
