<?php
echo "(20461) Siddiqui Mamoon<hr>";
final class MyClass {
  public $name = "Hello";
}
/*This will show error that class Derived may not inherit
 from final base class (Base)*/
class AnotherClass extends MyClass{};
?>  
