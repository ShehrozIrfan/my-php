<?php include "8.db_connection.php" ?>

<?php 

function showAllData() {
    global $connection;
$query = "SELECT * FROM users";

$result = mysqli_query($connection, $query);

if(!$result) {
    die("QUERY FAILED ... " . mysqli_error());
}
    
while($row = mysqli_fetch_assoc($result)) {
    $id = $row['id'];

    echo "<option value='$id'>$id</option>";
}
}

?>



<?php

function deleteRow() {
    global $connection;
    global $id;
    $query = "DELETE FROM users ";
    $query .= "WHERE id = $id";
    
    $result = mysqli_query($connection, $query);
    
    if(!$result) {
        die("Query Failed..." . mysqli_error($connection));
    } else {
        echo '<script>
            alert("Record Deleted Successfully...!");
        </script>';
    }
}

?>