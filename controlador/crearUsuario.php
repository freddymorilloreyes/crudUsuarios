<?php 
if (isset($_POST['usuario']) && isset($_POST['contrasenia'])) {
	require_once('../modelo/createUsuario.php');
	crearUsuario($_POST['usuario'], $_POST['contrasenia']);
	//session_start();
	//$_SESSION['usuario']=$_POST['usuario'];
	header('location:../ingresarAlSistema.html');
}else{
	header('location:');
}


 ?>