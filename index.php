<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <title>  FOOD APP </title>
  <link rel="stylesheet" type="text/css" href="GAN1.CSS">
</head>
<body>
  <div class="container">
    <header class="nav">
      <div class="logo">
        
        <span class="text">Quick bites</span>
      </div>
      <nav class="link">
        <a href="index.php">Home</a>
        <a href="aboutus.php">About us</a>
        <a href="contactus.php">Contact us</a>
      </nav>
      <nav class="link1">
        <div class="dropdown">
        <button class="dropbtn"><a href="#">Sign Up</a></button>
        <div class="dropdown-content">
          <a href="customersignup.php">As User</a>
          <a href="managersignup.php">As Manager</a>
        </div>
        </div>
        <div class="dropdown">
        <button class="dropbtn"><a href="#">Log In</a></button>
        <div class="dropdown-content">
          <a href="customerlogin.php">As User</a>
          <a href="managerlogin.php">As Manager</a>
        </div>
        </div>
      </nav>
    </header>
    <div class="site-content">
      <div class="image-content">
      </div>
      <div class="card-list">
        <h1 id="Product">Welcome to Quick bites</h1>
        <div class="card">
          <img src="images/Pizza.jpg" style="width:250px ; height: 250px;">
          <div>
            <h2>PIZZA</h2>
          </div>
        </div>
        <div class="card">
          <img src="images/burger.jpg"style="width:250px ; height: 250px;">
          <div>
            <h2>BURGER</h2>
          </div>
        </div>
        <div class="card">
          <img src="images/frenchfries.jpg"style="width:250px ; height: 250px;">
          <div>
            <h2>FRENCH FRIES</h2>
          </div>
        </div>
        <div class="card">
          <img src="images/cooldrinks.jpeg"style="width:250px ; height: 250px;">
          <div>
            <h2>COOL DRINKS</h2>
          </div>
        </div>
      </div>
      <div class="order-list">
        <button style="padding-left: 50px;padding-right: 50px ;padding-top: 15px; padding-bottom: 15px; color: green;" onclick="location.href='customerlogin.php';">ORDER NOW</button>
        <div>
          
        </div>
      </div>
    </div>
  </div>
</body>
</html>