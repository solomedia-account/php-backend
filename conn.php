<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "my-storage";

    //Create connection
    $connection = new mysqli($servername, $username, $password, $database);

    //Check connection
     if ($connection->connect_error){
        die("connection failed:" . $connection->connect_error);

     }else {
     echo"connected successfully";
     }





?>