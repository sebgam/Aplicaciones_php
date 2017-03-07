<?php 
session_start();
include "config.php";


if(isset($_SESSION['user'])){
?>
<form action="proceso.php" method="POST">
<table width="800" height="500">
	<tr>
		<td>
			<iframe src="mensajes.php" name="iframe" width="700" height="400"></iframe>
		</td>
	</tr>
	<tr>
		<input type="text" name="mensaje"> <button type="submit" name="enviar">enviar mensaje</button>
	</tr>

</table>
</form>
<?php 
}else{
?>

	<p>Debes iniciar sesion <a href="login.php">Click aqui</a></p>
<?php  
}

?>
 <p>estas conectado como <?php echo $_SESSION['user']; ?></p>
<a href="cerrar_sesion.php">cerrar sesion</a>

 