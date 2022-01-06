<?php
session_start();
?>

<html>

  <head>
    <title> Contact | Le Cafe' </title>
  </head>

  
  <link rel="stylesheet" type="text/css" href="GAN1.CSS">
  <link rel="stylesheet" type = "text/css" href ="css/bootstrap.min.css">
 
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
    <br>

    <div class="heading">
     <strong>Want to contact <span class="edit"> Quick bites' </span>?</strong>
     <br>
    Please fill the Form below.
    </div>

    <div class="col-xs-12 line"><hr></div>

    <div class="container" >
    <div class="col-md-5" style="float: none; margin: 0 auto;">
      <div class="form-area">
        <form method="post" action="">
        <br style="clear: both">
          <h3 style="margin-bottom: 25px; text-align: center; font-size: 30px;"> Contact Form</h3>

          <div class="form-group">
            <input type="text" class="form-control" id="name" name="name" placeholder="Name" required autofocus="">
          </div>

          <div class="form-group">
            <input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
          </div>     

          <div class="form-group">
            <input type="Number" class="form-control" id="mobile" name="mobile" placeholder="Mobile Number" required>
          </div>

          <div class="form-group">
            <input type="text" class="form-control" id="subject" name="subject" placeholder="Subject" required>
          </div>

          <div class="form-group">
           <textarea class="form-control" type="textarea" id="message" name="message" placeholder="Message" maxlength="140" rows="7"></textarea>
           <span class="help-block"><p id="characterLeft" class="help-block">Max Character length : 140 </p></span>
          </div> 
          <input type="submit" name="submit" type="button" id="submit" name="submit" class="btn btn-primary pull-right"/>    
        </form>

        
      </div>
    </div>
      
    </div>
</div>s

    <?php
if (isset($_POST['submit'])){
require 'connection.php';
$conn = Connect();

$Name = $conn->real_escape_string($_POST['name']);
$Email_Id = $conn->real_escape_string($_POST['email']);
$Mobile_No = $conn->real_escape_string($_POST['mobile']);
$Subject = $conn->real_escape_string($_POST['subject']);
$Message = $conn->real_escape_string($_POST['message']);

$query = "INSERT into contact(Name,Email,Mobile,Subject,Message) VALUES('$Name','$Email_Id','$Mobile_No','$Subject','$Message')";
$success = $conn->query($query);

if (!$success){
  die("Couldnt enter data: ".$conn->error);
}

$conn->close();
}
?>

     </body>

  
</html>