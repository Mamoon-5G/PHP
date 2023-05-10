<?php 
    echo '(20461) Siddiqui Mamoon<hr>';
    $array = array(
        array(10, 20, 30),
        array("Derek Hale", "Lucifer Morningstar", "Barry Allen"),
        array(0=>"Pagani Huyara", 1=>"Audi R8", 2=>"Chevrolet Camaro"),
    );
    $s = 'Barry Allen';
    echo "Two-Dimensional Array: <br>";
    foreach($array as $a) {
        for($i=0; $i<count($a); $i++) {
            echo $a[$i] . ", ";
        }
        echo "<br>";
    }
    echo "<hr>Element to be searched: " . $s;
    $c = 0;
    foreach($array as $a) {
        for($i=0; $i<count($a); $i++) {
            if ($a[$i]==$s) {
                echo "<br><br> $s found at index (" . ($c + 1) . ", " . ($i + 1) . ")";
                exit;
            }
        }
        $c++;
    }
    echo "<br><br>" . $s . " not found...";
?>