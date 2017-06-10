<?php 
session_start();
 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="UTF-8">
 	<title>Actualizar usuario</title>
 	<link rel="stylesheet" href="css/estilos.css" type="text/css">
 </head>
 <body>
 	<h1>Actualizar Usuario</h1>
 	<form action="controlador/actualizar.php" method="post">
 	<div>	
 		<label for="usuario">Nuevo Nombre de Usuario:</label>
 		<input type="text" requeride id="usuario" name="usuario" placeholder="Ingresa tu usuario" value="<?= $_SESSION['usuario']?>">
 	</div>
 	<div>
	 	<label for="contrasenia">Nueva Contraseña:</label>
 		<input type="text" required id="contrasenia" name="contrasenia" placeholder="Ingresa tu contraseña" value="<?= $_SESSION['contrasenia']?>">
 	</div>
 	<input type="hidden" name="id" value="<?=$_SESSION['id']?>">
 	<button class="conMargen" type="submit" >Actualizar</button>
 </form>
 </body>
 </html>