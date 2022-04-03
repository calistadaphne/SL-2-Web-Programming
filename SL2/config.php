<?php
    $server = "localhost";
    $username = "root";
    $password = "";
    $db_name = "appuang";

    $connection = mysqli_connect($server, $username, $password, $db_name);

    if ($connection){
        // echo "Connection Successful";
    }else{
        echo "Connection Failed".mysqli_connect_error();
    }
?>