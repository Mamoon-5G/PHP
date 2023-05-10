<?php
echo '(20461) Siddiqui Mamoon<hr>';
$arr = array(1,"This is an index array", 555);
$arr1 = array("key1" => "Airbus", "key2" => "Boeing", "Key3" => "Lockheed Martin");
$arr3 = array(
    array(10, 20, 30),
    array("Derek Hale", "Lucifer Morningstar", "Barry Allen"),
    array(0=>"Pagani Huyara", 1=>"Audi R8", 2=>"Chevrolet Camaro"),
);
$length= count($arr);
echo "Indexed array: <br> ";
for ($i=0; $i <$length ; $i++) {
    echo $arr[$i] . ",";
}
echo "<hr>";
echo "Associative array: <br>";
foreach ($arr1 as $key => $value) {
    echo "Key = " . $key . " Value = " . $value . "<br>";
}
print_r($arr1);
echo "<hr>";
echo "Multi-dimensional array: <br>";
$row=count($arr3);
for ($i=0; $i < $row; $i++) { 
    for ($j=0; $j <3; $j++) {
        echo $arr3[$i][$j]. ", ";
    }
    echo "<br>";
}
print_r($arr3);
?>
