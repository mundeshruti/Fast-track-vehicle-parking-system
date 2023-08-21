<?php
include("connection.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vehicle parking</title>
    <link rel="stylesheet" href="untitled.css">
</head>
<body>
    <h1>Fast-track Vehicle Parking</h1>
    <div class="form">
        <div class="login-form">
            <div class="imgcontainer">
                <img src="./images/admin.png" alt="Avatar" class="avatar">
            </div>
            <h1> Admin Login </h1>
            <form action="login1.php" method="post">   
                <label for="">Username:</label>
                <input type="text" name="username" placaholder="username" required> <br><br>
                <label for="">Password:</label>
                <input type="password" name="password" placaholder="Password" minlength="6" required> <br><br>
                <input type="submit" name= "submit" class="submit" value="login">
               
            </form>
            
        </div>
    </div>
</body>
</html>
