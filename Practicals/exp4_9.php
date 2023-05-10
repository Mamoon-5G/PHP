<?php 
echo '(20461) Siddiqui Mamoon<hr>';
$arr = array("key1" => "Airbus", "key2" => "Boeing", "Key3" => "Lockheed Martin");
echo "Before using array_flip<br>";
print_r($arr);
$result=array_flip($arr); 
echo "<br>After using array_flip<br>";
print_r($result);
?>