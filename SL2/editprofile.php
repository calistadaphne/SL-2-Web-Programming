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
<form action="editprofileprocess.php" method="post" enctype="multipart/form-data">
            <table>
                <tr>
                    <td>Nama Depan</td>
                    <td><input type="text" name="frontname" value="<?php echo $data['frontname'] ?>"></td>
                    <td>Nama Tengah</td>
                    <td><input type="text" name="middlename" value="<?php echo $data['middlename'] ?>"></td>
                    <td>Nama Belakang</td>
                    <td><input type="text" name="backname" value="<?php echo $data['backname'] ?>"></td>
                </tr>
                <tr>
                    <td>Tempat Lahir</td>
                    <td><input type="text" name="birthplace" value="<?php echo $data['birthplace'] ?>"></td>
                    <td>Tgl Lahir</td>
                    <td><input type="date" name="birthdate" value="<?php echo $data['birthdate'] ?>"></td>
                    <td>NIK</td>
                    <td><input type="text" name="nik" value="<?php echo $data['nik'] ?>" readonly></td>
                </tr>
                <tr>
                    <td>Warga Negara</td>
                    <td><input type="text" name="citizenship" value="<?php echo $data['citizenship'] ?>"></td>
                    <td>Email</td>
                    <td><input type="text" name="email" value="<?php echo $data['email'] ?>"></td>
                    <td>No HP</td>
                    <td><input type="text" name="phone" value="<?php echo $data['phone'] ?>"></td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td><input type="text" name="address" value="<?php echo $data['address'] ?>"></td>
                    <td>Kode Pos</td>
                    <td><input type="text" name="postalcode" value="<?php echo $data['postalcode'] ?>"></td>
                    <td>Foto Profil</td>
                    <td><input type="file" name="profile" value="Upload" accept="image/*" required></td>
                </tr>
            </table>
            <div class="wrapbutton">
                <div class="buttonbox"><a href="home.php">Kembali</a></div>
                <div class="buttonbox"><input type="submit" name="edit" value="Update"></div>
            </div>
        </form>
</body>
</html>