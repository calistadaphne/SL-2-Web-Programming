<?php
    session_start();
    include("config.php");

    $str_query = "select*from datauser";
    $query = mysqli_query($connection, $str_query);

    var_dump($query);
    while($data = mysqli_fetch_array($query)){
        if (($data['username'] == $_POST['username']) && 
            ($data['password'] == $_POST['password'])){
                $_SESSION['nikSession'] = $data['nik'];
                echo "<script>";
                echo "alert('Login Successful')";
                echo "</script>";

                echo "<script>";
                echo "window.location='home.php'";
                echo "</script>";
                // header("location:home.php");
        }
        else{
            header("location:login.php");
        }
    }
?>