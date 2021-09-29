<?php
    $servername = "localhost";
    $username = "db21_020";
    $password = "db21_020";
    $dbname = "db21_020";

    $conn = new mysqli($servername,$username,$password);
    if($conn->connect_error){
        die("Connection failed:".$conn->connect_error);
    }
    echo "Successfully connected to server <br>";


    if(!$conn->select_db($dbname)){
        echo $conn->connect_error;
    }else{
        echo "Successfully connected to database<br>";
    }
    


?>