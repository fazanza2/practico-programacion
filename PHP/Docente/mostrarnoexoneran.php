<?php
include("conexion.php");

$grupo=mysqli_real_escape_string($db,$_GET['grupo']); 
 


$result=mysqli_query($db,"SELECT estudiante.ide, usuario.nombre, usuario.apellido, nota FROM estudiante JOIN grupo ON estudiante.idg = grupo.idg join usuario on estudiante.idu = usuario.idu JOIN promedio ON estudiante.ide = promedio.ide WHERE grupo.nombre='$grupo' and promedio.periodo='final' and promedio.nota<'8'") ;

echo "<table class='tabla'>
<tr>
<th>nombre</th>
<th>apellido</th>
<th>nota</th>

</tr>";

  while($row = mysqli_fetch_array($result)) {
  echo "<tr>";
  echo "<td>" . $row['nombre'] . "</td>";
  echo "<td>" . $row['apellido'] . "</td>";
  echo "<td>" . $row['nota'] . "</td>";
  echo "</tr>";
}

  echo "</table>";
  

  
?>