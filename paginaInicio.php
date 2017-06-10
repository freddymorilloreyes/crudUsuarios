<?php 
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Bienvenido</title>
	<link rel="stylesheet" href="css/estilos.css" type="text/css">
</head>
<body>
	<h2>Hola <?= $_SESSION['usuario'] ?></h2>
	<button class="ArribaDerecha">
		<a href="controlador/cerrarSesion.php">Cerrar sesión</a>
	</button>
	<button>	
		<a href="actualizarUsuario.php?id=<?=$_SESSION['id']?>">Actualizar usuario</a>
	</button>
	<button>
		<a href="controlador/eliminarUsuario.php?id=<?=$_SESSION['id']?>">Eliminar cuenta</a>
	</button>




</body>
</html>