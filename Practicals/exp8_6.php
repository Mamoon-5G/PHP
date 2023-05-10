<?php
echo "(20461) Siddiqui Mamoon<hr>";
class parent1 {
  public function cheese() {
     echo "Hello...";
  }
}
  
trait parent2 {
  public function frenchfries() {
     echo " This is Delicious!";
  }
}
class child extends parent1 {
   use parent2;
   public function cheesedip() {
      echo "\n Do you want more Cheese Dip?";
  } 
}
$a = new child();
$a->cheese();
$a->frenchfries();
$a->cheesedip();
?>
