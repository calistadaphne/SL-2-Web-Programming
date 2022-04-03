<?php

    include("config.php");
    if ( isset($_POST['register'])){
        $str_query = "select*from datauser";
        $query = mysqli_query($connection, $str_query);
        while($data = mysqli_fetch_array($query)){
            if($data['nik'] == $_POST['nik']){
                echo "NIK invalid, another account has been created with this nik.";
                echo "window.location='register.php'";
            }
        }

        var_dump($_POST);

        if($_POST['password'] == $_POST['confirmpass']){
            $picture = $_FILES['profile']['name'];
            $tempName = $_FILES['profile']['tmp_name'];
            $dirTujuan = "profilepic/";
            $upload = move_uploaded_file($tempName, $dirTujuan.$picture);

            $str_query = "insert into datauser values
            ('".$_POST['frontname']."'  ,'".$_POST['middlename']."' , '".$_POST['backname']."',
            '".$_POST['birthplace']."'  ,'".$_POST['birthdate']."'  , '".$_POST['nik']."',
            '".$_POST['citizenship']."' ,'".$_POST['email']."'      , '".$_POST['phone']."',
            '".$_POST['address']."'     ,'".$_POST['postalcode']."' , '".$dirTujuan.$picture."')";

            $query = mysqli_query($connection, $str_query);
            
            if ($query){
                echo "<script>";
                    echo "alert('Insert Data Successful')";
                echo "</script>";

                echo "<script>";
                    echo "window.location='welcome.php'";
                echo "</script>";
            }else{
                echo "<script>";
                    echo "alert('Insert Data Failed')";
                echo "</script>";

                echo "<script>";
                    echo "window.location='welcome.php'";
                echo "</script>";
            }
        }else{
            echo "Password 1 and Password 2 don't match</br>";
            echo "<a href='register.php'>Back to Register Form</a><br>";
            echo "<a href='welcome.php'>Back to Welcome Page</a><br>";
        }
    }
    // var_dump($_FILES);

?>