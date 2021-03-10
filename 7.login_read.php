<?php
//including the connection file.
include "8.db_connection.php";

$query = "SELECT * FROM users";

$result = mysqli_query($connection, $query);

if(!$result) {
die("QUERY FAILED... !" .  mysqli_error());
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Using DB</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
<style>
.center {
float: none;
margin-left: auto;
margin-right: auto;
}
</style>
</head>
<body>
<div class="container">
<div class="row">
<div class="col-sm-12 col-md-6 center">

<?php

//here we can use mysqli_fetch_row or mysqli_fetch_assoc
//                while($row = mysqli_fetch_assoc($result)) {
//                    print_r($row);
//                }
//                ?>
<?php 
while($row = mysqli_fetch_assoc($result)) {
?>  

    <pre>
        
        <?php print_r($row) ?>
        
    </pre>
    
    <?php
}
?>

</div>
</div>
</div>
</body>
</html>