<?php 
if (isset($_POST['usuario']) && isset($_POST['contrasenia'])) {
	require_once('../modelo/updateUsuario.php');
	updateUsuario($_POST['id'],$_POST['usuario'] , $_POST['contrasenia']);
	session_start();
	$_SESSION['usuario']=$_POST['usuario']; //esto es para que el usuaro llegue actualizado al paginaInicio
	header('location:../paginaInicio.php');
}


 ?>