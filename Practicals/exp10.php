<?php
    echo "(20461) Mamoon Siddiqui<br><br>";
    echo "First Name: {$_POST['fname']}<br>"; 
    echo "Last Name: {$_POST['lname']}<br>";
    echo "Gender: {$_POST['gender']}<br>";
    $sport = $_POST['sport'];
    echo "Favourite Sport(s): ";
    foreach ($sport as $game) {
        echo $game."<br>";
    } 
?>
