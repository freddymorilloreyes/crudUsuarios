<?php 
session_start();
if (isset($_SESSION)) {
	session_unset();
	session_destroy();//aun no se la diferencia entre estos, session_unset() y session_destroy();
	//print_r($_SESSION);
	header('location:../ingresarAlSistema.html');
}else{
	header('location:../ingresarAlSistema.html');
}




 ?>