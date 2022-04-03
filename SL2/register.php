<?php
    session_start();
    include("config.php");
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
    <div class="regtitle"><h3>Register</h3></div>
    <div class="register">
        <form action="registerprocess.php" method="post" enctype="multipart/form-data">
            <table>
                <tr>
                    <td>Nama Depan</td>
                    <td><input type="text" name="frontname" required></td>
                    <td>Nama Tengah</td>
                    <td><input type="text" name="middlename" required></td>
                    <td>Nama Belakang</td>
                    <td><input type="text" name="backname" required></td>
                </tr>
                <tr>
                    <td>Tempat Lahir</td>
                    <td><input type="text" name="birthplace" required></td>
                    <td>Tgl Lahir</td>
                    <td><input type="date" name="birthdate" required></td>
                    <td>NIK</td>
                    <td><input type="text" name="nik" required></td>
                </tr>
                <tr>
                    <td>Warga Negara</td>
                    <td><input type="text" name="citizenship" required></td>
                    <td>Email</td>
                    <td><input type="text" name="email" required></td>
                    <td>No HP</td>
                    <td><input type="text" name="phone" required></td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td><input type="text" name="address" required></td>
                    <td>Kode Pos</td>
                    <td><input type="text" name="postalcode" required></td>
                    <td>Foto Profil</td>
                    <td><input type="file" name="profile" value="Upload" accept="image/*" required></td>
                </tr>
                <tr>
                    <td>Username</td>
                    <td><input type="text" name="username" required></td>
                    <td>Password 1</td>
                    <td><input type="password" name="password" required></td>
                    <td>Password 2</td>
                    <td><input type="password" name="confirmpass" required></td>
                </tr>
            </table>
            <div class="wrapbutton">
                <div class="buttonbox"><a href="welcome.php">Kembali</a></div>
                <div class="buttonbox"><input type="submit" name="register" value="Register"></div>
            </div>
        </form>
    </div>

</body>
</html>