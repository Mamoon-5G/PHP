<?php
echo '(20461) Siddiqui Mamoon<hr>';
function myfunction($num)
{
  return($num*$num);
}
$a=array(1,2,3,4,5);
echo "Before using Array_map<br>";
print_r($a);
echo "<br>After using Array_map<br>";
print_r(array_map("myfunction",$a));
?>