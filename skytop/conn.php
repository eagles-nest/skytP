<?php
$host="localhost";
$user="root";
$password="";
$database="test12";

$conn = mysqli_connect($host,$user,$password,$database) or die("connect not connect to the database");
function validateInput($conn,$var){
	$var=mysqli_real_escape_string($conn,$var);
	return $var;
}

?>
