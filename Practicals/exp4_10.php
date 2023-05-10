<?php
echo '(20461) Siddiqui Mamoon<hr>';
function myfunction($value,$key)
{
echo "The key $key has the value $value<br>";
}
$a=array("A"=>"Red","B"=>"Green","C"=>"Blue");
array_walk($a,"myfunction");
?>