<?php 
echo '(20461) Siddiqui Mamoon<hr>';
    $str = ('Hello ,World! ,Sing ,Song!');
    $x = explode(',',$str ,-1);
    echo "Explode with -1<br>";
    print_r($x);
    $y = explode(',',$str ,0);
    echo "<br>Explode with 0<br>";
    print_r($y);
    $z = explode(',',$str ,2);
    echo "<br>Explode with 2<br>";
    print_r($z);
?>