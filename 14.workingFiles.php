<?php 
//working with files.

//1. opening and creating files.

//$file = "example.txt";
//
////writing to a file.
////fopen will return a handle whether we write to a file or not, so we will store that in 'handle' variable.
//$handle = fopen($file, "w");
//
//if($handle) {
//    echo "File Created ...";
//}
//
////closing the file
//fclose($handle);

?>


<?php 

//2. writing to file.

$file = "text.txt";

if($handle = fopen($file, 'w')) {
    fwrite($handle, "Currently we are working php but later on we will move to one of it's popular frameworks 'Laravel'");
    
    fclose($handle);
} else {
    echo "The application is unable to write to the file...";
}
?>




<?php 

//3. reading from a file.

//opening the file in read mode.
if($handle = fopen($file, 'r')) {
    //so we also have to tell the number of bytes, and each byte equals to one character.
//    $content = fread($handle, 20);
    
    //or we an also use the built in funtion filesize to read the entire file.
    $content = fread($handle, filesize($file));
    echo "<br>" . $content . "<br>";
    fclose($handle);
} else {
    echo "<br> Application is unable to open the file. <br>";
}

?>




<?php 

//deleting files.

unlink("example.txt");

?>