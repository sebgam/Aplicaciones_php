<?php 

session_start();
include 'config.php';
if(isset($_SESSION['user'])){

	$select = " SELECT * FROM chat ORDER BY ID DESC";

	$resultado = $conexion->prepare($select);

	$resultado->execute();

	$filas = $resultado->rowCount();

	if($filas > 0){

		while ($rows = $resultado->fetch(PDO::FETCH_ASSOC)) {
			
			?>

			<p><a href="borrar.php"> borrar </a><b> usuario:</b> <?php echo $rows['USUARIO'] ?></p>
			<p>mensaje: <?php echo $rows['MENSAJE'] ?></p>
			






<?php 
		}

	}



}


 ?>