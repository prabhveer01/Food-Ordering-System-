<?php
session_start();
?>

<html>

  <head>
    <title> About | Le Cafe' </title>
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
<br><br><br

   
         <div class="about">
        <p>About Us</p>
        <p>Welcome to Quick Bites. cheap Food, Best quality. Relish your taste buds with one easy click. Order from our large variety of snacks.
            Enjoy Your Meal!</p>
    </div>
    <div class="info">
        <h1 style="text-align: center;margin-bottom: 2%;">Developers</h1>
        <div class="dev">
            <img src="images/ganesh.jpeg"  ><br>
            <p style="display: inline;">
                
 DESHMUKH SAIGANESH <BR> REG NO : 19BCE0134
            </p>
        </div>
        <div class="dev">
            <img src="images/prabveer.JPG" width="70%" height="50%"><br>
            <p style="display: inline;">
                PRABHVEER SINGH KHURANA <BR> REG NO : 19BCE0280
               
            </p>
        </div>
        <div class="dev">
            <img src="images/kaartik.jpeg" width="70%" height="50%"><br>
            <p style="display: inline;">
                KAARTIKEYA PANJWANI <BR>REG NO : 19BCE2124</p>
        </div>
    </div>
</div>

         </body>
</html>