<?php 
    $servername = getenv('DB_SERVERNAME');
    $username = getenv('DB_USERNAME');
    $password = getenv('DB_PASSWORD');
    $database = getenv('DB_DATABASE');

    // $conn = mysqli_connect($servername, $username, $password, $database);

    $conn = mysqli_init();
mysqli_ssl_set($conn,NULL,NULL, "/home/site/wwwroot/ssl/DigiCertGlobalRootCA.crt.pem", NULL, NULL);
mysqli_real_connect($conn, $servername, $username, $password, $database, 3306, MYSQLI_CLIENT_SSL);
    
    // if (mysqli_connect_errno())
    //     die("Connection failed: " . mysqli_connect_error());
?>