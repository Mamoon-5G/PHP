<?php
    echo '(20461) Siddiqui Mamoon<hr>';
    $array = array(
        array(10, 20, 30), 
        array(5, 25, 85), 
        array(2, 9, 1)
    );
    $min = $array[0][0];
    $max = $array[0][0];
    echo "Two-Dimensional Array: <br>";
    foreach($array as $a) {
        for($i=0; $i<count($a); $i++) {
            echo $a[$i] . ", ";
        }
        echo "<br>";
    }
    
    foreach ($array as $a) {
        for ($i=0; $i<count($a); $i++){
            if($a[$i] < $min) {
                $min = $a[$i];
            }
        }
    }
    echo "<br>Minimum Value: " . $min;

    foreach ($array as $a) {
        for ($i=0; $i<count($a); $i++){
            if($a[$i] > $max) {
                $max = $a[$i];
            }
        }
    }
    echo "<br><br>Maximum Value: " . $max;
?>
