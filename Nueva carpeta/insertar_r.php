<?php  
	if (!isset($_GET['oculto'])) {
		exit();
	
	}
	
	include('conexion_r.php');
	
	$usuario = $_POST ['usuario'];
	$nombre =	$_POST ['nombre'];
	$telefono = $_POST ['telefono'];
	$correo=	$_POST ['correo'];
	$contraseña=$_POST ['contraseña'];
	
	$sentencia = $bd->prepare("INSERT INTO clientes (usuario,nombre,telefono,correo,contraseña) VALUES (?,?,?,?,?);");
	$usuarios_r = $sentencia->execute([$usuario,$nombre,$telefono,$correo,$contraseña]);

	if ($usuarios_r === TRUE) {
		
		header("Location: inisiar sesion.php");
	}else{
		echo "Error";
	}
?>