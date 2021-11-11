<?php 

$dbhost="localhost";
$dbuser="root";
$dbpass="";
$dbname="blog";

session_start();

if(!$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname))
{
	die("failed to connect");
}
