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


<?php 
//constructors

class Keyboard {
    function __construct() {
        echo "Constructor called..." . "<br>";
    }
}

$simple = new Keyboard();
$mechanical = new Keyboard();
?>


<?php 
//Data Access.
/*
1. public - access anywhere
2. protected - accessible inside a class and it's sub classes.
3. private - accessible only inside a class.
*/

class DataAccess {
    var $wheels;
    public $engine;
    private $doors;
    protected $hood;
    
    function __construct() {
        echo "Constructor called... !" . "<br>";
        $this -> wheels = 4;
        $this -> engine = 1;
        $this -> doors = 5;
        $this -> hood = 1;
    }
    
    function getValues () {
        echo "Doors : " . $this -> doors . "<br>";
        echo "Hood : " . $this -> hood . "<br>";
    }
}

class Child extends DataAccess {
    function __construct() {
        echo "Child constructor called .." . "<br>";
        echo $this -> hood;
    }
}

$obj = new DataAccess();
//so we've seen that, the public and 'var' are working the same way.
echo $obj-> wheels . "<br>";
echo $obj -> engine . "<br>";

//now access the protected and private methods outside a class.

//echo $obj -> doors;
//echo $obj -> hood;

$child = new Child();

//accessing the private and protected properties using getter method.
$obj -> getValues();

?>


<?php 

//static data
class StaticData {
    static $wheels;
    
    function __construct() {
        //accessing the static data inside a constructor.
        StaticData :: $wheels = 4;
    }
}

$sd = new StaticData();
//the below statement will show error.
//$sd -> wheels;

echo StaticData :: $wheels . "<br>";

?>