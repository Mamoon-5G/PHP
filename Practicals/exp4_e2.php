<?php
echo '(20461) Siddiqui Mamoon<hr>';
$arr1 = array("1" => "GoodBye", "3" => "Hello", "2" => "Hii");
echo "Associative array before sorting <br>";
print_r($arr1);
echo "<br><hr>";
asort($arr1);
echo "Ascending Sorting wrt Value : ";
print_r($arr1);
echo "<br>";
arsort($arr1);
echo "Descending Sorting wrt Value : ";
print_r($arr1);

echo "<br><hr>";
ksort($arr1);
echo "Ascending Sorting wrt Key : ";
print_r($arr1);
echo "<br>";
krsort($arr1);
echo "Descending Sorting wrt Key : ";
print_r($arr1);
?>