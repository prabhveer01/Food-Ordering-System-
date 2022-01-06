<?php
session_start();

if(!isset($_SESSION['login_user2'])){
header("location: customerlogin.php"); 
}

?>


<html>

  <head>
    <title> Explore | Food' </title>
  <style>
  .mypanel{
  border: 1px solid #eaeaec; 
  margin: -1px 19px 3px -1px; 
  box-shadow: 0 1px 2px rgba(0,0,0,0.05); 
  background-color: #FAFAFA;  
  padding:15px;
  border-radius: 5px;
}
  </style>
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
        <a href="foodlist.php">food Menu</a> 
        <a href="cart.php">Cart</a> 
        <a href="logout_u.php">Log Out </a>  
      </nav>
    </header>
    <br><br> 
<br><br> 

    

<div class="jumbotron">
  <div class="container text-center">
    <h1> Hi <?php echo $_SESSION['login_user2']; ?></h1>  
    <h1> Welcome To Quick bites'</h1>      
    <!--p>Let food be thy medicine and medicine be thy food</p-->
  </div>
</div>


  </div>
</body>
</html>