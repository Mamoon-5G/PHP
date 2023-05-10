<?php 
echo "(20461) Siddiqui Mamoon<hr>";
class person { 
    public $name; 
    public function __construct($n) { 
        $this -> name = $n; 
    } 
    public function intro() { 
        echo "Hello ".$this -> name; 
    } 
} 
class Age extends person { 
    public function message() {
        echo "<br> How are you today ".$this -> name."?"; 
    }
}
$a = new Age("Mamoon"); 
$a->intro(); 
$a->message(); 
?>
