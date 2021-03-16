<?php 

class Car {
    
    //adding properties to our class.
    var $wheels = 4;
    var $doors = 5;
    var $engine = 1;
    
    //creating a method.
    function moveWheels() {
        echo "Wheels Move...";
        //if we want to access a property inside a method, then we use 'this'
        $this -> wheels = 8;
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

//instantiating a class.
$honda = new Car();
$toyota = new Car();

echo "<br>";
$honda -> moveWheels();
echo "<br>";
$toyota -> moveWheels();

echo "<br>";
//so to access the properties:
echo $honda -> wheels;
//we can also re-assign the values of properties.
$honda -> wheels = 5;
echo "<br>" . $honda -> wheels;


//class Inheritance.

class Plane extends Car{
    //over-riding.
    var $wheels = 10;
}

if(class_exists("Plane")) {
    echo "<br>" . "Plane exists" . "<br>";
}

$jet = new Plane();
echo $jet -> wheels . "<br>";
echo $jet -> doors . "<br>";

?>