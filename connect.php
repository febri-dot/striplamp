<?php
    //Akun database
    $servername = "localhost";
    $username   = "lamp";
    $password   = "123";
    $database   = "striplamp";


    //perintah konek ke mysql server
    $conn = mysqli_connect($servername, $username, $password, $database);

    //$mysqli = new mysqli($hostname, $username, $password, $database);


    if (mysqli_connect_errno()) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
        die("Stop");
    }
?>