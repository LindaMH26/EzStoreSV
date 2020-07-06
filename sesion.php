/*Script by ggsgranados */
<?php
	include ("conexion.php");
	$correo = $_POST["Email"];
	$pass= $_POST["Password"];
	$sql="SELECT * FROM `usuario` WHERE email = '$correo' && password = '$pass'";
	$result=mysqli_query($conexion,$sql);
	if (!$result) {
		header("Location:mail.html");
	}
	else {
		header("Location:index2.html");
	}


?>