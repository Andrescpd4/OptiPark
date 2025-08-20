<?php
class conexion{
	public function get_conexion(){
		include_once __DIR__ . "/data.php";
		$conexion= new PDO("mysql:host=$host;dbname=$db;", $user, $pass);
		return $conexion;
	}
}
?>