<?php
echo "(20461) Siddiqui Mamoon<hr>";
class Introspection
{ 
    public function description() {
    echo "I am a super class for the Child class.<br><br>";
    }
}
class Child extends Introspection
{
    public function description() {
    echo "I'm " . get_class($this) , " class.<br><br>";
    echo "I'm " .get_parent_class($this) , "'s child.<br><br>";
}
}

if (class_exists("Introspection")) {
    $introspection = new Introspection();
    echo "The class name is: " .get_class($introspection) . "<br><br>";
    $introspection->description();
}
if (class_exists("Child")) {
    $child = new Child();
    $child->description();
    if (is_subclass_of($child,"Introspection")) 
    {
        echo "Yes, " . get_class($child) . " is a subclass of Introspection.<br><br>";
    }
    else {
        echo "No, " . get_class($child) . " is not a subclass of Introspection.<br><br>";
    }
}?>
