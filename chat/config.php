<?php 

try {

$conexion = new PDO('mysql:host=localhost; dbname=chat','root','clave.123');
$conexion-> setAttribute(PDO::ATTR_ERRMODE, PDO:: ERRMODE_EXCEPTION);
$conexion->exec("SET CHARACTER SET utf8");


	
} catch (Exception $e) {
	echo "error" . $e->getMessage;
}

 ?>