<?php 
include "config.php";

$user = $_POST['user'];
$pass=$_POST['pass'];

$sql= "SELECT * FROM usuarios WHERE USUARIO = :user AND PASSWORD= :pass";

$resultado = $conexion->prepare($sql);

$resultado->execute(array(":user"=>$user,":pass"=>$pass));



$numero_registros = $resultado->rowCount();

if($numero_registros !=0){
	session_start();
	$_SESSION['user'] = $user;
	header("location:index.php");

}else{
	header("location:login.php");
}


 ?>