<?php 
session_start();
include 'config.php';
$user = $_SESSION['user'];

$borrar = "DELETE  FROM chat WHERE USUARIO = :user";

$resultado = $conexion->prepare($borrar);

$resultado->execute(array(":user"=>$user));

echo "chat borrado";

header("refresh:2; mensajes.php");


 ?>