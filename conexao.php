<?php

function conexao (){
    $host = "localhost";
    $user = "root";
    $password = "124578";
    $database = "testetdah";
    $con = mysqli_connect($host, $user,$password,$database);

    // Check connection
    if (mysqli_connect_errno()) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
        exit();
    } 
    return $con;
}

?>