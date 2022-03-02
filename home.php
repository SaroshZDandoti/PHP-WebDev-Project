<?php
session_start();
require 'db_connection.php';
// CHECK USER IF LOGGED IN
if(isset($_SESSION['user_email']) && !empty($_SESSION['user_email'])){

$user_email = $_SESSION['user_email'];
$get_user_data = mysqli_query($db_connection, "SELECT * FROM `users` WHERE user_email = '$user_email'");
$userData =  mysqli_fetch_assoc($get_user_data);

}else{
header('Location: logout.php');
exit;
}
?>


<!DOCTYPE html>
<html lang="">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Home</title>


<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<style>
  div.gallery {
    margin: 5px;
    border: 1px solid #ccc;
    float: left;
    width: 250px;
    height:300px;
  }

  div.gallery:hover {
    border: 1px solid #777;
  }

  div.gallery img {
    width: 100%;
    height: auto;
  }

  div.desc {
    padding: 15px;
    text-align: center;
  }
</style>

<body style=" background-image: url('resources/hombg3.jpg');  background-repeat: no-repeat;background-size: cover;">


<nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark " >

  <a class="navbar-brand" href="#">Alice Furnitures</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-item nav-link active" href="#">Home <span class="sr-only">(current)</span></a>
      <a class="nav-item nav-link" href="features.php">Browse</a>
      <a class="nav-item nav-link" href="feedback.php">FeedBack</a>
      <a class="nav-item nav-link " href="about.php">About us</a>
      <a class="nav-item nav-link " href="logout.php">Logout</a>

    </div>
  </div>
</nav>


<br><br><br><br><br><br>



<center>
<div class="" style="background-color: white;width:600px;border-radius: 15px 15px 15px 15px; 
 text-transform: uppercase;  letter-spacing: 6px; ">
<h1>Hello, <?php echo $userData['username'];?> </h1>
 <h3>What would you like to buy today..?</h3>
<br>
</div>
</center>
<br><br><br>
<center>
<h1 style="color:white;">Gallery</h1>
</center>
<br><br><br>
<div class="gallery" style="background-color: white;margin-left:200px">
  <a target="_blank" href="resources/c1.jpg">
    <img src="resources/c1.jpg"  width="600" height="400">
  </a>
  <div class="desc">Beautiful Furniture Set You can see here <p>Click to zoom</p></div>
</div>

<div class="gallery" style="background-color: white">
  <a target="_blank" href="resources/c2.jpg">
    <img src="resources/c2.jpg"  width="600" height="600">
  </a>
  <div class="desc">Beautiful Furniture Set You can see here <p>Click to zoom</p></div>
</div>

<div class="gallery" style="background-color: white">
  <a target="_blank" href="resources/c3.jpg">
    <img src="resources/c3.jpg"  width="600" height="400">
  </a>
  <div class="desc">Beautiful Furniture Set You can see here <p>Click to zoom</p></div>
  
</div>

<div class="gallery" style="background-color: white">
  <a target="_blank" href="resources/f4.jpg">
    <img src="resources/f4.jpg"  width="600" height="400">
  </a>
  <div class="desc">Beautiful Furniture Set You can see here <p>Click to zoom</p></div>
</div>


<br><br><br><br><br><br><br><br><br>
<br><br><br><br><br><br><br><br><br>

<div class="row" style="margin-left:450px;  max-width: 600px;">
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Browse Products</h5>
        <p class="card-text">go see our beautifully handmade furniture sets.</p>
        <a href="features.php" class="btn btn-primary">Click here</a>
      </div>
    </div>
  </div>
  <div class="col-sm-6" >
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">About me</h5>
        <p class="card-text">Who am i ?.</p>
        <br>
        <a href="about.php" class="btn btn-primary">Click Here</a>
      </div>
    </div>
  </div>
</div>
<br><br><br><br><br><br><br><br><br>

<center>
<footer style="background-color:  #00264d;">
<br>
  <p style="color:white;font-size:30px">Author: Sarosh Dandoti</p>
  
  <p ><a style="color:white" href="mailto:saroshdandoti@gmail.com">saroshdandoti@gmail.com</a></p>
  <br><br>
</footer>
</center>
</body>
</html>