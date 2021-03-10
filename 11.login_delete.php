<?php include "8.db_connection.php" ?>
<?php include "10.functions.php" ?>
<?php 

    if(isset($_POST['delete'])) {
        $id = $_POST['id'];
        
        deleteRow();
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Delete</title>
    <style>
        div{
            margin: 50px;
        }
    </style>
</head>
<body>
    <form action="11.login_delete.php" method="post">
        <select name="id">
            <?php showAllData(); ?>
        </select>
        <div>
            <input type="submit" name="delete" value="Delete">
        </div>
    </form>
</body>
</html>

