<?php
    $server = "localhost";
    $user = "root";
    $password = "";
    $database = "db_mrpc";

    $conn = mysqli_connect($server, $user, $password, $database); 
    if(!$conn){
        echo "Could not connect to the database!";
    }
?>