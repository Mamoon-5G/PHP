<?php
echo "(20461) Siddiqui Mamoon<hr>";

echo "Serialize <br>";
$a=serialize(array('Hello','this','is','Avengers'));
print_r($a."<br><br>");
echo "Unserialize <br>";
$b=unserialize($a);
print_r($b);
?>
