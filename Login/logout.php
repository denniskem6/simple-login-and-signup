<?php 
include("./connection.php");
include("./functions.php");

session_destroy();
setcookie('remember_me', '0', time() + (-86400 * 30), "/"); 
header("LOCATION: ./login.php");
 ?>
