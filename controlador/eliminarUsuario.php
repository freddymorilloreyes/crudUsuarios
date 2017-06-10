<?php 
session_start();
if (isset($_GET['id'])) {
	require_once('../modelo/deleteUsuario.php');
	borrarUsuario($_GET['id']);
	header('location:../ingresarAlSistema.html');
}

 ?>