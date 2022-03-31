<?php
echo(<script> alert("Connection estaasdasdasdasblishment failed!")</script>);
$server= "localhost";
$username="root";
$password="";
$database="login_register";
$conn= mysqli_connect($server,$username,$password,$database);
if(!$conn){
	die(<script> alert("Connection establishment failed!")</script>);
}
else{
	die(<script> alert("Connection establishment not failed!")</script>);
}
?>