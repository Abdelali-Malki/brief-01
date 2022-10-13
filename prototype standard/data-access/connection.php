<?php
    $servername  = "localhost";
    $username  = "root";
    $password = "";
    $db = "gestiondespromotions_v1";

    $conn = new mysqli($servername,$username ,$password,$db);
    // if ($conn->connect_error) {
    //     die("Connection failed: " . $conn->connect_error);
    //   }
    //   echo "Connected successfully";
?>