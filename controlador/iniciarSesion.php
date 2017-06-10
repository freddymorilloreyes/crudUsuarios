<?php 

	session_start();
	if (isset($_POST['usuario']) && isset($_POST['contrasenia'])) {
	
	$usuario=$_POST['usuario'];
	$contrasenia=$_POST['contrasenia'];

	require_once('../modelo/obtenerUnUsuario.php');
	$infoUsuario= getUsuario($_POST['usuario'],$_POST['contrasenia']);
	var_dump($infoUsuario);
	if (!empty($infoUsuario)) {
		
		$_SESSION['id']=$infoUsuario['id'];
		$_SESSION['usuario']=$usuario;
		$_SESSION['contrasenia']=$contrasenia;
		header('location:../paginaInicio.php');
	}else{
		header('location:../fallaAlIniciar.html');
	}

	}

 ?>