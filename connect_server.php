<?php
    $servername = "localhost";
    $username = "username";
    $password = "password";
    $dbname = "databaseName";

    $conn = new mysqli($servername,$username,$password);

    if($conn->connect_error){
        die("Connection failed:".$coo->connect_error);
    }
    echo "Successfully connected to server <br>";
    $conn->close();
?>