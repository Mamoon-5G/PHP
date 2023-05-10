<?php
echo '(20461) Siddiqui Mamoon<hr>';
$arr = array(1, 87, 93, 10, 92);
echo "Array before sorting: ";
for ($i=0; $i < count($arr); $i++) {
    echo "$arr[$i]". ", ";
}
echo "<br><br>";
echo "After using sort()<br>";
sort($arr);
for ($i=0; $i < count($arr); $i++) {
    echo "$arr[$i]". ", ";
}
echo "<br>";
print_r($arr);

echo "<br><br>";
echo "After using rsort()<br>";
rsort($arr);
for ($i=0; $i < count($arr); $i++) {
    echo "$arr[$i]". ", ";
}
echo "<br>";
print_r($arr);

echo "<br><br>";
echo "Sorting the array in ascending order using bubble sort algorithm<br>";
$len = sizeof($arr);
for($i = 0; $i < $len; $i++){
    for($j = 0; $j < $len -$i-1 ; $j++){
        if($arr[$j] > $arr[$j+1]){
            $temp = $arr[$j];
            $arr[$j] = $arr[$j + 1];
            $arr[$j + 1] = $temp;
        }
    }
}
for ($i=0; $i < count($arr); $i++) {
    echo "$arr[$i]". ", ";
}
echo "<br>";
print_r($arr);

echo "<br><br>";
echo "Sorting the array in descending order using bubble sort algorithm<br>";
$len = sizeof($arr);
for($i = 0; $i < $len; $i++){
    for($j = 0; $j < $len -$i-1 ; $j++){
        if($arr[$j] < $arr[$j+1]){
            $temp = $arr[$j];
            $arr[$j] = $arr[$j + 1];
            $arr[$j + 1] = $temp;
        }
    }
}
for ($i=0; $i < count($arr); $i++) {
    echo "$arr[$i]". ", ";
}
echo "<br>";
print_r($arr);
?>