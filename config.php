<?php
$server= "localhost";
$username="sakib";
$password="1";
$database="user_register";
$conn= mysqli_connect($server,$username,$password,$database);
if(!$conn){
	echo '<script> alert("Connection establishment failed!")</script>';
}
else{
	
}
?>