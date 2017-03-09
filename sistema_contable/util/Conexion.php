<?php 
include 'config.php';


class conexion{

	public static function conectar(){
		try {
				$con = new PDO("mysql:host=localhost; dbname=sistemacontable_php","root","clave.123");

				//return $cn;




		} catch (Exception $e) {
			echo "error" . $e->getMessage();
		}
	echo "conectado correctamente";

	}

}

conexion::conectar();


 ?>