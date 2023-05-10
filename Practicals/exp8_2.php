<?php
echo "(20461) Siddiqui Mamoon<hr>";
class shape { 
    function __call($name_of_function, $arguments) { 
        if($name_of_function == 'area') {          
            switch (count($arguments)) { 
                case 1: return 3.14 * $arguments[0]; 
                case 2: return $arguments[0]*$arguments[1]; 
            } 
        } 
    } 
} 
$s = new Shape; 
echo("Area of Circle: ".$s->area(2)); 
echo "<br>"; 
echo ("Area of rectangle: ".$s->area(4, 2));
?>
