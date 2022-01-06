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
  <style>
    /* Dropdown Button */
.dropbtn {
  background-color: #04AA6D;
  color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
  position:relative;
  left:620%;
  
 
}
button{
  background-color: #04AA6D;
  color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
  float: lefy;
  left:620%;
  
 
}

/* The container <div> - needed to position the dropdown content */
.dropdown {
  
  display: inline-block;
  position:relative;
  
}

/* Dropdown Content (Hidden by Default) */
.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 160px;
  left:620%
  
}

/* Links inside the dropdown */
.dropdown-content a {
  color: black;
  padding: 12px 16px;
  display: block;
}

/* Change color of dropdown links on hover */
.dropdown-content a:hover {background-color: #ddd;}

/* Show the dropdown menu on hover */
.dropdown:hover .dropdown-content {display: block;}

/* Change the background color of the dropdown button when the dropdown content is shown */
.dropdown:hover .dropbtn {background-color: #3e8e41;}
</style>

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
            <h1 class="text-center" style="color: green;"><span class="glyphicon glyphicon-ok-circle"></span> Order Placed Successfully.</h1>
          </div>
        </div>
        <br>

<h2 class="text-center"> Thank you for Ordering at Quick Bites! The ordering process is now complete.</h2>

<?php 
  $num1 = rand(100000,999999); 
  $num2 = rand(100000,999999); 
  $num3 = rand(100000,999999);
  $number = $num1.$num2.$num3;
?>

<h3 class="text-center"> <strong>Your Order Number:</strong> <span style="color: blue;"><?php echo "$number"; ?></span> </h3>
<div class="dropdown">
  <button class="dropbtn">GET HELP</button>
  <div class="dropdown-content">
    <a href="query.php">Food Item Missing</a>
    <a href="query.php">Food Not Delivered</a>
    <a href="query.php">Quality Issues</a>
    <a href="query.php">Payment Queries</a>
    <a href="query.php">Packaging Issues</a>
    <a href="query.php">Incorrect Order Recieved</a>
   </div>


</div>

 <button  onclick="location.href='rating.html';">RATE ORDER</button>
        </body>

</html>