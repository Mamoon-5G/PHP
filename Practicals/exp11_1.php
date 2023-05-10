<html>
    <body>
        <form name="sample" action="exp11_1.php" method="post">
            <input type="hidden" value="Mamoon Siddiqui " name="hidden">
            ListBox: <br>
            <select size="5" name="list">
                <option value="item1">Apple</option>
                <option value="item2">Ball</option>
                <option value="item3">Cat</option>
                <option value="item4">Dog</option>
                <option value="item5">Elephant</option>
            </select><br><br>
            DropDown List: <br>
            <select name="drop">
                <option value="item1">Crow</option>
                <option value="item2">Pigeon</option>
                <option value="item3">Hen</option>
                <option value="item4">Eagle</option>
                <option value="item5">Vulture</option>
            </select><br><br>
            <input type="submit">            
        </form>
    </body>
</html>


<?php
    echo "(20461) Siddiqui Mamoon<hr>";
    echo "Value of Hidden Field: {$_POST['hidden']}<br>"; 
    echo "ListBox Selected Item: {$_POST['list']}<br>";
    echo "DropDown List Selected Item: {$_POST['drop']}<br>";
?> 
