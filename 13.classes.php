<?php 

class Car {
    
    //creating a method.
    function moveWheels() {
        echo "Wheels Move...";
    }
}

//checking whether a class exists or not.
if(class_exists("Car")) {
    echo "Class Exists";
} else {
    echo "Doesn't exist";
}

//checking whether a function inside a class exists or not.
if(method_exists("Car", "moveWheels")) {
    echo "<br>" . "Move Wheels method exists..";
} else {
    echo "<br>" . "Move Wheels method doesn't exists...";
}

?>