<?php
echo"20461 Siddiqui Mamoon<br>";
    $name = $_POST['name'];
    $age = $_POST['age'];
    $dob = $_POST['dob'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $regex = "/^[a-zA-Z]{2,30}$/";
if(preg_match($regex, $name)) {
        echo "Name is correct.";
    } else {
        echo "Name should not contain special character or digits.";
    }
    echo "<br>";
    $regex = "/^(0?[1-9]|[1-9][0-9])$/";
if(preg_match($regex, $age)) {
        echo "Age is correct.";
    } else {
        echo "Age should be in between 18 and 99.";
    }
    echo "<br>";
    $regex = "/^[0-9]{4}-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1])$/";
if(preg_match($regex, $dob)) {
        echo "Date of Birth is correct.";
    } else {
        echo "Format: dd-mm-yyyy";
    }
    echo "<br>";
    $regex = "/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/";
if(preg_match($regex, $email)) {
        echo "E-mail is correct.";
    } else {
        echo "Invalid E-mail...";
    }
    echo "<br>";
    $regex = "/^(?=.*[0-9])(?=.*[!@#$%^&*])[a-zA-Z0-9!@#$%^&*]{6,16}$/";
if(preg_match($regex, $password)) {
        echo "Password is correct.";
    } else {
        echo "Must contain atleast 1 uppercase, 1 lowercase, 1 digit, 1 special-character and length between 6-16.";
    }
?>
