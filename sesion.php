/*Script by ggsgranados */
<?php
	include ("conexion.php");
	$correo = $_POST["Email"];
	$pass= $_POST["Password"];
	// MOVER A UN TRY CATCH
	$sql="SELECT password FROM `usuario` WHERE email = '$correo'";
	$result=mysqli_query($conexion,$sql);
	if ($result) {
		echo 'Entro al primer if';
		$row= $result->fetch_array();
		if (password_verify($pass,$row['password'])) {
			echo 'Entro al segundo if'.$row['password'];
			header("Location:index2.html");
		}
	}
	else {
		//NECESITO UN SCRIPT QUE DIGA FALLO DE INICIO DE SESION
		header("Location:index.html");
	}

	mysqli_close($conexion);

?>