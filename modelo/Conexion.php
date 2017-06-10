<?php 

	class Conexion 
	{
		private $host;
		private $database;
		private $user;
		private $pass;
		function __construct()
		{
			$this->host="localhost";
			$this->database="crud4";
			$this->user="root";
			$this->pass="abdc1234";
		}

		public function conectar()
		{
			$conexion= new PDO("mysql:host=$this->host;dbname=$this->database", $this->user, $this->pass, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING));
			return $conexion;
		}
	}
	
	$conexion= new Conexion();
	$conexion=$conexion->conectar();
	echo "hola soy Conexion.php <br>";
 ?>


