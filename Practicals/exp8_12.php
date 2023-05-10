<?php
echo "(20461) Siddiqui Mamoon<hr>";
function add() {
    static $number = 10;
    $number++;
    return $number; 
}
echo add();
echo "<br>";
echo add();
echo "<br>";
echo add();
?>
