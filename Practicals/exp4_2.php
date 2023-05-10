<?php
echo '(20461) Siddiqui Mamoon<hr>';
$arr=array(42,89,343,8,10);
echo "Array Before Sorting: ";
$length= count($arr);
for ($i=0; $i <$length ; $i++) {
    echo $arr[$i] . " ";
}
echo "<hr>Array After Sorting: ";
sort($arr);
for ($i=0; $i <$length ; $i++) {
    echo $arr[$i] . " ";
}
?>