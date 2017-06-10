<?php
require_once('Conexion.php'); 

function borrarUsuario($id_user)
{
	$conexion= new Conexion();
	$conexion= $conexion->conectar();
	$statement=$conexion->prepare("DELETE FROM usuarios WHERE id=:id");	
	$statement->bindparam(':id', $id_user);
	$statement->execute();
}

 ?>