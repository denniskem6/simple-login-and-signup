<?php 
    
    include("connection.php");//session srtr
    include("functions.php");
	include("./autologin.php");//autologin

    if(!isset($_SESSION["userid"])){
        header("LOCATION: ./login.php");//redirect
    }
$id=$_SESSION["userid"];
$query = "SELECT * FROM users WHERE id= '$id'";

$result = mysqli_query($con, $query);
$row = mysqli_fetch_assoc($result);
 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1">
 	<title>@FineMaster</title>
 </head>
 <body>
 	<a href="./logout.php">Logout</a>
 	<h1>This is my home page</h1>
 	<h1>  <?php  if(isset($_SESSION["message"])){
        echo $_SESSION['message'];
        unset ($_SESSION['message']);
    }?></h1>

 	<br>
 	Hello everyone welcome to my youtube channel my name is <?=$row['username']?>

 </body>
 </html>