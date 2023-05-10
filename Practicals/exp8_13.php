<?php
echo "(20461) Siddiqui Mamoon<hr>";
class A {
    static $count;
    public static function add() {
        return self::$count++;
    }
}
A::$count = 1; 
for($i = 0; $i < 5; ++$i) {
    echo A::add() . "\n";
}
?>
