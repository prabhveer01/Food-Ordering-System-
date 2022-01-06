<?php

include('session_m.php');

if(!isset($login_session)){
header('Location: managerlogin.php'); 
}



$name = $conn->real_escape_string($_POST['name']);
$email = $conn->real_escape_string($_POST['email']);
$contact = $conn->real_escape_string($_POST['contact']);
$address = $conn->real_escape_string($_POST['address']);


$query = "INSERT INTO RESTAURANTS(name,email,contact,address,M_ID) VALUES('" . $name . "','" . $email . "','" . $contact . "','" . $address ."','" . $_SESSION['login_user1'] ."')";
$success = $conn->query($query);

if (!$success){
	?>
	<!DOCTYPE html>
	<html>
	<head>
		<title>change</title>
  
  <link rel="stylesheet" type = "text/css" href ="css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="GAN1.CSS">
  
	</head>
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
	<div class="jumbotron" style="text-align: center;">
		<h1>Your already have one restaurant.</h1>
		<p>Go back to your <a href="view_food_items.php">Restaurant</a></p>
	</div>
</div>
</div>
	</body>
	</html>

	<?php
}
else {
	header('Location: myrestaurant.php');
}

$conn->close();


?>