<?php 
require_once('Conexion.php');
function updateUsuario($id_user , $name_user , $pass_user)
{
	$conexion= new Conexion();
	$conexion=$conexion->conectar();
	$statement=$conexion->prepare("UPDATE usuarios SET usuario=:usuario, contrasenia=:contrasenia WHERE id=:id");
	$statement->bindparam(':id',$id_user);
	$statement->bindparam(':usuario',$name_user);
	$statement->bindparam(':contrasenia', $pass_user);
	$statement->execute();
}




 ?>