<?php
echo "(20461) Siddiqui Mamoon<hr>";

echo "Normal find and replace<br>";
$str = "A quick brown fox jumps over the lazy dog.";
echo "Normal String : .$str";
echo ("<br>After Replace : ");
echo str_replace("dog","cat",$str);

echo "<hr>Find and replace within array string<br>";
$arr = array("Hii","Hello","Bye","GoodBye","Hello");
echo "Before replacement : ";
print_r($arr);
echo "<br>After replacement : ";
print_r(str_replace("Hello","Hola",$arr,$i));
echo "<br>Replacements: $i";

echo "<hr>Find and replace with array find, array replace and array string<br>";
$find = array("Hello","world");
$replace = array("B");
$arr = array("Hello","world","!");
echo "Before replacement : ";
print_r($arr);
echo "<br>After replacement : ";
print_r(str_replace($find,$replace,$arr));
?>
