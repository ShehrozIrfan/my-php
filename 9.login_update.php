<?php include "8.db_connection.php" ?>
<?php include "10.functions.php" ?>
<?php 

if(isset($_POST['update'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $id = $_POST['id'];
    
    $query = "UPDATE users SET ";
    $query .= "name = '$username' ,";
    $query .= "password = '$password' ";
    $query .= "WHERE id = $id";
    
    $result = mysqli_query($connection, $query);
    
    if(!$result) {
        die("QUERY FAILED ..." .  mysqli_error($connection));
    } else {
        echo '<script>alert("Updated Successfully.. ! ");</script>';
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Update</title>
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
<form action="9.login_update.php" method="post">
<div class="form-group">
    <input type="text" class="form-control mb-5 mt-5" placeholder="Username" name="username">
</div>
<div class="form-group">
    <input type="password" class="form-control mb-5 mt-5" placeholder="Password"
    name="password">
</div>
<div class="form-group">
    <select name="id"  class="mb-5">
        <?php 
        
        showAllData();
        
        ?>
    </select>
</div>
<div>
    <input type="submit" class="btn btn-primary" name="update" value="update">
</div>
</form>
</div>
</div>
</div>
</body>
</html>