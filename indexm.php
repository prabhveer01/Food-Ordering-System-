<?php
include('session_m.php');

if(!isset($login_session)){
header('Location: managerlogin.php'); // Redirecting To Home Page
}

?>
<!DOCTYPE html>
<html>

  <head>
    <title> Manager Login | quick bites' </title>
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
        <a href="indexm.php">Home</a>
        <a href="aboutusm.php">About us</a>
        <a href="contactusm.php">Contact us</a>
      </nav>
      <nav class="link2"> 
<a href="managerlogin.php">Control panel</a> 
        <a href="logout_m.php">Log Out </a>  
      </nav>
    </header>
    <br><br> 
<br><br> 





<div class="container">
    <div class="jumbotron">
     <h1>Hello <?php echo $login_session; ?></h1>
     <p>Manage all your restaurant from here</p>

    </div>
    </div>
  </div>
</body>
</html>