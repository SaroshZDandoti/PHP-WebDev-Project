<?php
session_start();
require 'db_connection.php';
require 'login.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Login for Alice Furnitures</title>

<link rel="stylesheet" href="styles.css" media="all" type="text/css">


</head>

<body>
<br><br><br><br>
<h1 style="color:white;text-align: center;text-transform: uppercase;letter-spacing: 6px;">Alice Furnitures</h1>
<br<br><br>


<div >

    <div  style="float: left;padding-left:350px  ">

  <form action="" method="post" >
    <div class="card" style="" >

  
        <div class="container" 
        style="background-color:white;border-radius: 45px 0px 0px 0px; ">
          <h2> Login to your account</h2>
        </div>

          <div class="container" style="background-color:white;">
              <label for="email"><b> EMAIL</b></label>
                <input type="email" placeholder="Enter email" id="email" name="user_email" required>

                <label for="password"><b style="letter-spacing: 1px;"> PASSWORD</b></label>
                <input type="password" placeholder="Enter password" id="password" name="user_password" required>

              <button type="submit">LOGIN</button>
          </div>

          <div style="background-color: white;" >
              <?php
              if(isset($success_message)){
              echo '<div class="success_message">'.$success_message.'</div>'; 
              }
              if(isset($error_message)){
              echo '<div class="error_message">'.$error_message.'</div>'; 
              }
              ?>
          </div>
        
        <div class="container" style="background-color:#f1f1f1;border-radius:0px 0px 0 0 ">
          <a href="signup.php"><button type="button" class="Regbtn" >Create your account</button></a>
          </div>
  

    </div>
  </form>

  </div>

  <div >
  <img src="resources/log.jpg" class="card"  width="350" height="435" style="border-radius:0px 0px 45px 0;">
  </div>

</div>

</body>

</html>