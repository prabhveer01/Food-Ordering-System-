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




<div class="container" style="width:95%;">

<!-- Display all Food from food table -->
<?php

require 'connection.php';
$conn = Connect();

$sql = "SELECT * FROM FOOD WHERE options = 'ENABLE' ORDER BY F_ID";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0)
{
  $count=0;

  while($row = mysqli_fetch_assoc($result)){
    if ($count == 0)
      echo "<div class='row'>";

?>
<div class="col-md-3">

<form method="post" action="cart.php?action=add&id=<?php echo $row["F_ID"]; ?>">
<div class="mypanel" align="center";>
<img src="<?php echo $row["images_path"]; ?>" class="img-responsive">
<h4 class="text-dark"><?php echo $row["name"]; ?></h4>
<h5 class="text-info"><?php echo $row["description"]; ?></h5>
<h5 class="text-danger">&#8377; <?php echo $row["price"]; ?>/-</h5>
<h5 class="text-info">Quantity: <input type="number" min="1" max="25" name="quantity" class="form-control" value="1" style="width: 60px;"> </h5>
<input type="hidden" name="hidden_name" value="<?php echo $row["name"]; ?>">
<input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>">
<input type="hidden" name="hidden_RID" value="<?php echo $row["R_ID"]; ?>">
<input type="submit" name="add" style="margin-top:5px;" class="btn btn-success" value="Add to Cart">
</div>
</form>
      
     
</div>

<?php
$count++;
if($count==4)
{
  echo "</div>";
  $count=0;
}
}
?>

</div>
</div>
<?php
}
else
{
  ?>

  <div class="container">
    <div class="jumbotron">
      <center>
         <label style="margin-left: 5px;color: red;"> <h1>Oops! No food is available.</h1> </label>
        <p>Stay Hungry...! :P</p>
      </center>
       
    </div>
  </div>

  <?php

}

?>

   
</body>
</html>