<?php 
require_once('Conexion.php');
function getUsuario($usuario,$contrasenia)
{
	$conexion= new Conexion();
	$conexion=$conexion->conectar();
	$statement=$conexion->prepare("SELECT * FROM usuarios WHERE usuario=:usuario AND contrasenia=:contrasenia");
	$statement->bindparam(':usuario',$usuario);
	$statement->bindparam(':contrasenia', $contrasenia);
	$statement->execute();
	$infoUsuario=$statement->fetch();
	return $infoUsuario;
}

?>