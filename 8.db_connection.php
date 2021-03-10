<?php

$connection = mysqli_connect('localhost', 'root', 'root', 'myloginapp', '3307');

if(!$connection) {
    echo "Connection Failed";
} 

?>