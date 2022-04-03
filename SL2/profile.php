<?php
    session_start();
    include("config.php");
    if (isset($_SESSION['nikSession'])){
        $id = $_SESSION['nikSession'];
        $str_query = "select*from datauser where nik='".$id."'";
        $query = mysqli_query($connection, $str_query);
        $data = mysqli_fetch_array($query);
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>
    <div class="header">
        Aplikasi Pengelolaan Keuangan
        <div class="homebox"><a href="home.php">Home</a></div>
        <div class="profilebox"><a href="profile.php">Profile</a></div>
        <div class="logout"><a href="logout.php">Logout</a></div>
    </div>
    <div class="headertitle">Profil Pribadi</div>
    <div class="profilebody">
        <table class="center">
            <tr>
                <td>Nama Depan</td>
                <th><?php echo $data['frontname'] ?></th>
                <td>Nama Tengah</td>
                <th><?php echo $data['middlename'] ?></th>
                <td>Nama Belakang</td>
                <th><?php echo $data['backname'] ?></th>
            </tr>
            <tr>
                <td>Tempat Lahir</td>
                <th><?php echo $data['birthplace'] ?></th>
                <td>Tgl Lahir</td>
                <th><?php echo $data['birthdate'] ?></th>
                <td>NIK</td>
                <th><?php echo $data['nik'] ?></th>
            </tr>
            <tr>
                <td>Warga Negara</td>
                <th><?php echo $data['citizenship'] ?></th>
                <td>Email</td>
                <th><?php echo $data['email'] ?></th>
                <td>No HP</td>
                <th><?php echo $data['phone'] ?></th>
            </tr>
            <tr>
                <td>Alamat</td>
                <th><?php echo $data['address'] ?></th>
                <td>Kode Pos</td>
                <th><?php echo $data['postalcode'] ?></th>
                <td>Foto Profil</td>
                <th><img src="<?php echo $data['profile'] ?>" 
                width=100 height=100 alt=Image path Invalid name=image /></th>
            </tr>
        </table>
        <div clas="editprofile"><a href="editprofile.php">Edit Profil Pribadi</a></div>
    </div>
</body>
</html>