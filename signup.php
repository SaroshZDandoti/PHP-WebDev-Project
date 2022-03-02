<?php 
session_start();
require 'db_connection.php';
require 'insert_user.php';
// IF USER LOGGED IN
if(isset($_SESSION['user_email'])){
header('Location: home.php');
exit;
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Sign Up </title>
<link rel="stylesheet" href="styles_signup.css" media="all" type="text/css">
</head>

<body>
<br><br><br><br><br>

<div>
<div style="float: left;padding-left:350px  ">
<form action="" method="post" >


<div class="container" style="background-color:white;border-radius: 45px 0px 0px 0px">
          <h2> Sign up your account</h2>
        </div>
    <div class="card">
        <div class="container" style="background-color:white;border-radius: 0px 0px 0px 0px">
        <label for="username"><b>USERNAME</b></label>
        <input type="text" placeholder="Enter username" id="username" name="username" required>

        <label for="email"><b>EMAIL</b></label>
        <input type="email" placeholder="Enter email" id="email" name="user_email" required>

        <label for="password"><b>PASSWORD</b></label>
        <input type="password" placeholder="Enter password" id="password" name="user_password" required>

        <button type="submit">SIGN UP</button>
        </div>
        <?php
        if(isset($success_message)){
        echo '<div class="success_message">'.$success_message.'</div>'; 
        }
        if(isset($error_message)){
        echo '<div class="error_message">'.$error_message.'</div>'; 
        }
        ?>

        <div class="container" style="background-color:#f1f1f1;border-radius:0px 0px 0px 0px ">
        <a href="index.php"><button type="button" class="Regbtn">LOGIN</button></a>
        </div>

    </div>
</form>
</div>
<img src="resources/sign.jpg" class="card"  width="350" height="513.6" style="border-radius:0px 0px 45px 0;">

<div>


</div>

</div>

</body></html>