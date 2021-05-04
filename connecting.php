<?php

$servername = "localhost";
$user = "root";
$pass = " ";
$db_name="pays"; 

$conn = mysqli_connect($servername,$user,$pass,$db_name); 

if(mysqli_connect_errno()) {
    die("Error connecting to database"); 
}

    $query = "SELECT * FROM pays"; 
    $result = mysqli_query($conn,$query);

    if(!$result) {
        die("Error SQL QUERY <br>".$query);

    }
$total_pays = mysqli_num_rows($result); 

?>