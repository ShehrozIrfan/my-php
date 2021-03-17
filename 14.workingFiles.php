<?php 
//working with files.

//1. opening and creating files.

$file = "example.txt";

//writing to a file.
//fopen will return a handle whether we write to a file or not, so we will store that in 'handle' variable.
$handle = fopen($file, "w");

if($handle) {
    echo "File Created ...";
}

//closing the file
fclose($handle);

?>