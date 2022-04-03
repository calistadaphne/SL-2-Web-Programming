<?php
    session_start();
    include("config.php");
    if (isset($_SESSION['nikSession'])){
        $id = $_SESSION['nikSession'];
        $str_query = "select*from datauser where nik='".$id."'";
        $query = mysqli_query($connection, $str_query);
        $data = mysqli_fetch_array($query);
    }
    // var_dump($_SESSION['nikSession']);
    // var_dump($query);
    // echo isset($_SESSION['nikSession']);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>
    <div class="header">
        Aplikasi Pengelolaan Keuangan
        <div class="homebox"><a href="home.php">Home</a></div>
        <div class="profilebox"><a href="profile.php">Profile</a></div>
        <div class="logoutbox"><a href="logout.php?id='.$data['nik'].'">Log Out</a></div>
    </div>
    <div class="homebody">
        Hello <span class="boldname"><?php echo $data['frontname']." ".$data['middlename']
        ." ".$data['backname'] ?></span> , Selamat datang di Aplikasi Pengelolaan Keuangan
    </div>
</body>
</html>