<?php 
    $servername = getenv('DB_SERVERNAME');
    $username = getenv('DB_USERNAME');
    $password = getenv('DB_PASSWORD');
    $database = getenv('DB_DATABASE');

    $conn = mysqli_connect($servername, $username, $password, $database);
    
    if (mysqli_connect_errno())
        die("Connection failed: " . mysqli_connect_error());
?>