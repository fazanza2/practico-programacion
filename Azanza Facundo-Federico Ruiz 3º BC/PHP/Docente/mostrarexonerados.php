<?php 
    require '../conexion.php';

	
	$sql="SELECT * from estudiante";
	$result=mysqli_query($conexion,$sql);
	while($mostrar=mysqli_fetch_array($result)){
	}

	
?>