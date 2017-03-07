<?php 
session_start();
include "config.php";

if(isset($_SESSION['user'])){

	echo "hola " . $_SESSION['user'] . " ya estas logeado <a href='cerrar_sesion.php'>cerrar sesion</a>";
}else
{
?>
<form action="logeo.php" method="post">
<p><input type="text" name="user"> usuario</p>
<p><input type="text" name="pass"> password</p>
<p><input type="submit" value="iniciar session" name="enviar"></p>
</form>

<?php  	
}

?>
 