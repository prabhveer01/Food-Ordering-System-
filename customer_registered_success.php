<html>

  <head>
    <title> Manager Login  </title>
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
<br><br><br><br>
<?php

require 'connection.php';
$conn = Connect();

$fullname = $conn->real_escape_string($_POST['fullname']);
$username = $conn->real_escape_string($_POST['username']);
$email = $conn->real_escape_string($_POST['email']);
$contact = $conn->real_escape_string($_POST['contact']);
$address = $conn->real_escape_string($_POST['address']);
$password = $conn->real_escape_string($_POST['password']);

$query = "INSERT into CUSTOMER(fullname,username,email,contact,address,password) VALUES('" . $fullname . "','" . $username . "','" . $email . "','" . $contact . "','" . $address ."','" . $password ."')";
$success = $conn->query($query);

if (!$success){
	die("Couldnt enter data: ".$conn->error);
}

$conn->close();

?>


<div class="container">
	<div class="jumbotron" style="text-align: center;">
		<h2> <?php echo "Welcome $fullname!" ?> </h2>
		<h1>Your account has been created.</h1>
		<p>Login Now from <a href="customerlogin.php">HERE</a></p>
	</div>
</div>

    </body>
</html>