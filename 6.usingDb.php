<!-- 

1. Create a form

2. get all the form data using php

3. connect to the database

4. CRUD - Create record in the database.

-->


<?php 

if(isset($_POST['submit'])) {
    //getting user data
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    //establishing the connection
    $connection = mysqli_connect('localhost', 'root', 'root', 'myloginapp', '3307');
    
    //checking whether the connection is established or not.
    if($connection) {
        echo "Successfully connected to the database ... !";
    } else {
        die ("Connection failed ..");
    }
    
    //writing the query.
    $query = "INSERT INTO users(name,password)";
    
    $query .= "VALUES('$username', '$password')";
    
    //executing the query
    $result = mysqli_query($connection, $query);
    
    //checking whether the query is successfully executed or not.
    if(!$result) {
        die("QUERY FAILED" . mysqli_error());
    } else {
        echo '<script>alert("Inserted Successfully...")</script>';
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
                <form action="6.usingDb.php" method="post">
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