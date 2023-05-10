<?php 
echo '(20461) Siddiqui Mamoon<hr>';
    $arr = array(64,35,10,94,13);
    echo "Array: ";
    for($i=0; $i<count($arr); $i++) {
        echo $arr[$i]. " ";
    }
    $index = array_search(10 , $arr);
    if($index!=null) {
        echo "<br>10 found at index : " . $index;
    } else {
        echo "<br><br>10 was not present in array";
    }
?>