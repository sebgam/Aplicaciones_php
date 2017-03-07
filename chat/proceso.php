<?php 
session_start();
include 'config.php';

if (isset($_POST['enviar'])) {
	
	$user = $_SESSION['user'];
	$mensaje =$_POST['mensaje'];

$insertar = "INSERT INTO chat (USUARIO,MENSAJE) VALUES (:usuario, :mensaje)";

$resultado = $conexion->prepare($insertar);

$resultado->execute(array(":usuario"=>$user,":mensaje"=> $mensaje));

header("location:index.php");

}else

echo "error";

 ?>