<?php
session_start();
require 'connection.php';
$conn = Connect();
if(!isset($_SESSION['login_user2'])){
header("location: customerlogin.php"); 
}

unset($_SESSION["cart"]);
?>

<html>

  <head>
    <title> Cart | Quick Bites</title>
  </head>

  <link rel="stylesheet" type = "text/css" href ="css/bootstrap.min.css">
 <link rel="stylesheet" type="text/css" href="GAN1.CSS">
  <body>

  
     <div class="container">
    <header class="nav">
      <div class="logo">
        
        <span class="text">Quick bites</span>
      </div>
      <nav class="link">
        <a href="indexu.php">Home</a>
        <a href="aboutusu.php">About us</a>
        <a href="contactusu.php">Contact us</a>
      </nav>
      <nav class="link2">
        <a href="track.php">Track</a> 
        <a href="logout_u.php">Log Out </a> 
      </nav>

    </header>
    <br><br> 
<br><br> 
<br><br> 




        <div class="container">
          <div class="jumbotron">
            <h1 class="text-center" style="color: green;"><span class="glyphicon glyphicon-ok-circle"></span> We are working on it!we will contact you soon..</h1>
          </div>
        </div>
        <br>






        </body>

</html>