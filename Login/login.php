<?php 

include("connection.php");//session srtr
include("functions.php");
include("./autologin.php");//autologin

 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1">
 	<title>login</title>
 </head>

 <body>
 	<style type="text/css">
 		
 		#text{
 			height: 25px;
 			border-radius: 5px;
 			padding: 4px;
 			border: solid thin #aaa;
 			width: 100%;

 		}

 		#button{
 			padding: 10px;
 			width:100px;
 			color: white;
 			background-color: lightblue;
 			border: none;
 		}
 		#box{
 			background-color: royalblue;
 			margin:auto ;
 			width: 300px;
 			padding: 20px;
 		}

 	</style>

 	<div id="box">
 		<form method="post" action="http://localhost/login/action/verifylogin.php">
 			<div style="font-size: 20px;margin: 10px;color: white;">login</div>
 			<input id="text" placeholder="enter username" type ="text"name="username"><br><br>
 			<input id="text" placeholder="enter password" type="text"name="password"><br><br>
 			<input id="button" type="submit" value="login"><br><br>
			<input id=""type="checkbox" name= "remember_me"><span></span><br><br>
 			<a href="signup.php">click to signup</a><br><br>
 		
 		</form>

 	</div>
 
 </body>

 </html>