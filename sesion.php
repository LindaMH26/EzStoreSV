<?php
	include ("conexion.php");
	$con=conectar();
	$correo="Email";
	$pass="Password";
	$sql="SELECT email, password FROM `usuario` WHERE email = '$correo' && password = '$pass'";
	$result=$con->query($sql);
	if ($result->num_rows >0) {
		header("Location:index2.html");
	}
	else{
		header("Location:index.html");
	}


?>