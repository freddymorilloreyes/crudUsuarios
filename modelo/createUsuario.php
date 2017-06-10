<?php 
require_once('Conexion.php');
function crearUsuario($newUser, $newPass)
{
	$conexion= new Conexion();
	$conexion= $conexion->conectar();
	$statement=$conexion->prepare("INSERT INTO usuarios (usuario, contrasenia) VALUES (:newUser, :newPass)");
	$statement->bindparam(':newUser', $newUser);
	$statement->bindparam(':newPass', $newPass);
	$statement->execute();
}
 ?>