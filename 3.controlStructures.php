<?php 

#if statement

if(3 < 4) {
    echo "3 is less than 4";
} else if( 5 > 4) {
    echo "ofcourse 5 is greater than 4";
} else {
    echo "Hello World";
}

#comparison operators
/*

equal ==
identical ===
compare < > >= <= <>
not equal !=
not identical !==

*/

#logical operators
/*

AND &&
OR || 
NOT !

*/

echo "<br/>";

if(4 <> 4) {
    echo "True";
}
else {
    echo "False";
}

echo "<br>";
#switch in php

$number = 110;

switch($number) {
    case 10: {
        echo "It is 10";
        break;
    }
    case 11: {
        echo "It is 11";
        break;
    }
    case 12: {
        echo "It is 12";
        break;
    }
    default: {
        echo "Nothing...!";
    }
}

echo "<br/>";
#while loop

$i = 0;
while($i < 10) {
    echo $i . "<br>";
    $i++;
}

echo "<br>";
#for loop
for($i = 0; $i < 10; $i++) {
    echo "$i <br/>";
}

echo "<br/>";
#foreach loop

$arr = [1,4,7,9,10,33,66];

foreach($arr as $i) {
    echo "$i <br/>";
}

/*  
Step1: Make an if Statement with elseif and else to finally display string saying, I love PHP


Step 2: Make a forloop  that displays 10 numbers


Step 3 : Make a switch Statement that test againts one condition with 5 cases

 */
?>