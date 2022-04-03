<?php
    
    include("config.php");
    var_dump($_POST['edit']);
    if ( isset($_POST['edit'])){
        $picture = $_FILES['profile']['name'];
        $tempName = $_FILES['profile']['tmp_name'];
        $dirTujuan = "profilepic/";
        $upload = move_uploaded_file($tempName, $dirTujuan.$picture);

        $str_query = "update datauser set 
        frontname='".$_POST['frontname']."', middlename='".$_POST['middlename']."', backname='".$_POST['backname']."',
        birthplace='".$_POST['birthplace']."', birthdate='".$_POST['birthdate']."', nik='".$_POST['nik']."', 
        citizenship='".$_POST['citizenship']."', email='".$_POST['email']."', phone='".$_POST['phone']."', 
        address='".$_POST['address']."', postalcode='".$_POST['postalcode']."', profile='".$dirTujuan.$picture."'
        where nik='".$_POST['nik']."'";
        
        $query = mysqli_query($connection, $str_query);

        if ($query){
            echo "<script>";
                echo "alert('Update Data Successful')";
            echo "</script>";

            echo "<script>";
                echo "window.location='home.php'";
            echo "</script>";
        }else{
            echo "<script>";
                echo "alert('Update Data Failed')";
            echo "</script>";

            echo "<script>";
                echo "window.location='home.php'";
            echo "</script>";
        }
    }
?>