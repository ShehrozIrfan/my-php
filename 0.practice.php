<?php

if(isset($_POST['submit'])) {
    $username = $_POST['username'];
    
    $password = $_POST['password'];
    
    $connection = mysqli_connect('localhost', 'root', 'root', 'mypracticeapp', '3307');
    
    if($connection) {
        echo "Successfully connected to the database...!";
        $query = "INSERT INTO users(name,password)";
    
        $query .= "VALUES('$password', '$username')";

        $result = mysqli_query($connection, $query);

        if($result) {
            echo '<script>alert("Inserted Successfully...")</script>';
        } else {
            die("Query Failed" . mysqli_error());
        }
    } else {
        die("Connection Failed...");
    }
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
<form action="0.practice.php" method="post">
    <div class="form-group">
        <input type="text" class="form-control mb-5 mt-5" placeholder="Username" name="username">
    </div>
    <div class="form-group">
        <input type="password" class="form-control mb-5 mt-5" placeholder="Password"
        name="password">
    </div>
    <div>
        <input type="submit" class="btn btn-primary" name="submit">
    </div>
</form>
</div>
</div>
</div>
</body>
</html>