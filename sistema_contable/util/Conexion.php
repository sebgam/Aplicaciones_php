<?php 
include '../config/config.php';


class conexion{

	public static function conectar(){
		try {
				$con = new PDO("mysql:host=".HOST."; dbname=".DB,USER,PASSWORD);

				return $cn;




		} catch (Exception $e) {
			echo "error" . $e->getMessage();
		}
	

	}

}




 ?>