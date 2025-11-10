<?php  
   $servername = "Localhost";
    $username = "root";
    $password = "";
    $database = "test_db";
    $conn = mysqli_connect($servername, $username, $password, $database);

    if (!$conn) 
    {
        die("connection failed :");
    }
?> 