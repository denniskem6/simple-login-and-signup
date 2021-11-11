<?php 

include("connection.php");//session srtr
include("functions.php");

if(isset($_SESSION["userid"])){
	header("LOCATION: ./index.php");//redirect
}
 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1">
 	<title>signup</title>
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
 		<form method="post" action="http://localhost/login/signup-action.php">
 			<div style="font-size: 20px;margin: 10px;color: white;">signup</div>
 			<input id="text" placeholder="enter name" type ="text"name="name"><br><br>
            <input id="text" placeholder="enter username" type ="text"name="username"><br><br>
 			<input id="text" placeholder="enter password" type="text"name="password"><br><br>

 			<input id="button" type="submit" value="signup"><br><br>

 			<a href="login.php">click to login</a><br><br>
 		
 		</form>

 	</div>
 
 </body>

 </html>
