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
    <title>Login</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>
    <div class="login">
        <form action="loginprocess.php" method="post">
            <table class="loginbox">
                <div class="logintitle"><h3>Login</h3></div>
                <tr>
                    <td>Username</td>
                    <td><input type="text" name="username" required></td>
                </tr>
                <tr>
                    <td>Password</td>
                    <td><input type="password" name="password" required></td>
                </tr>
                <!-- <tr>
                    <td><input type="submit" name="submit" value="Login"></td>
                    <td><a href="welcome.php">Kembali</a></td>
                </tr> -->
                <tr class="wrapbutton">
                    <td class="minibuttonbox"><input type="submit" name="submit" value="Login"></td>
                    <td class="minibuttonbox"><a href="welcome.php">Kembali</a></td>
                </tr>
            </table>
        </form>
    </div>
</body>
</html>