<?php
function getMax($array)
{
   $n = count($array);
   $max = $array[0];
   for ($i = 1; $i < $n; $i++)
       if ($max < $array[$i])
           $max = $array[$i];
    return $max;      
}
function getMin($array)
{
   $n = count($array);
   $min = $array[0];
   for ($i = 1; $i < $n; $i++)
       if ($min > $array[$i])
           $min = $array[$i];
    return $min;      
}   
echo '(20461) Siddiqui Mamoon<hr>';
$array = array(10, 35, 24, 1, 55);
echo "Array Elements are : ";
for($i=0; $i<count($array); $i++) {
    echo $array[$i]. " ";
}
echo "<hr>Maximum Element in Array: ";
echo(getMax($array));
echo("<br>");
echo "Minimum Element in Array: ";
echo(getMin($array));
?>