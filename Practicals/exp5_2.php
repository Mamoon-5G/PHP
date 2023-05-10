<?php
echo "(20461) Siddiqui Mamoon<hr>";
$str="A big brown fox jumps over the lazy dog.<hr>";
echo ($str);
echo "Length of above string : ";
print_r(strlen($str));
echo "<br>Occurence position of jumps in string : ";
echo strpos($str,"jumps");
echo "<br>Comparison of 'Hello' and 'Hello' : ";
echo strcmp("Hello","Hello");
echo "<br>Comparison of 'Hello' and 'hello' : ";
echo strcmp("Hello","hello");
echo "<br>";
?>