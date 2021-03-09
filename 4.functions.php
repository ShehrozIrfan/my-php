<?php 

echo "<h1>Functions</h1>";
#functions

function sayHello() {
    echo "Hello World";
}


sayHello();


function add () {
    return 5 + 4;
}
echo "<br>";
echo add();


//Function parameters
function saySomething($msg) {
    echo "<br> $msg";
}

saySomething("Welcome PHP ... ");
//function to add two numbers using parameters
function addNums($num1, $num2) {
    return $num1 + $num2;
}
$sum = addNums(5,6);
echo "<br> $sum <br>";
echo addNums(4,2);

echo "<h1>Scope</h1>";

#Global Variable and scope
$x = "outside"; //Global

function convert() {
    //now if we want to use the global variable then we've to declare it global.
    //global $x;
    $x = "inside"; //local
}

echo "<br>";
echo $x;
convert();
echo "<br>";
echo $x;

echo "<h1>Constants</h1>";

//defining constants
define("NAME", "Shehoz Irfan");

echo "<br>";
echo NAME;

//Name = "Ali";
define("NUM",  199);
echo "<br>";
echo NUM;

//NUM = 200;

/*  
Step1: Define a function and make it return a calculation of 2 numbers

Step 2: Make a function that passes parameters and call it using parameter values
 */


?>




<?php 

#Built-in functions
echo "<h1>Built-in Functions</h1>";

echo "<h3>Math functions</h3>";
echo "<br>";
echo pow(2,4);
echo "<br>";
echo rand();
echo "<br>";
echo rand(1,5);
echo "<br>";
echo sqrt(100);
echo "<br>";
echo ceil(4.6);
echo "<br>";
echo floor(4.6);
echo "<br>";
echo round(4.5);

echo "<h3>String functions</h3>";

$string = "Hello students... ! What's going on ? ";
echo strlen($string);
echo "<br>";
echo strtoupper($string);
echo "<br>";
echo strtolower($string);

echo "<h3>Array Functions</h3>";
$arr = [3,456,2343,87,43];

echo max($arr);
echo "<br>";
echo min($arr);
echo "<br>";
print_r($arr);

/*  
Step1: Use a pre-built math function here and echo it

Step 2:  Use a pre-built string function here and echo it


Step 3:  Use a pre-built Array function here and echo it
 */
?>