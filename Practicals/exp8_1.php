<?php
echo "(20461) Siddiqui Mamoon<hr>";
class student
{
    public $name;
    public $rollno;
}

$stud = new student();
$stud -> name = 'Mamoon';
$stud -> rollno = 20462;
$stud1 = new student();
$stud1 -> name = 'Hello World';
$stud1 -> rollno = 20000;
$students = array($stud, $stud1);
print_r($students);
?>
