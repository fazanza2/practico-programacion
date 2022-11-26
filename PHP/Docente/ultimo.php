<?php
include("conexion.php");

$grupo=mysqli_real_escape_string($db,$_GET['grupo']); 
 


$result=mysqli_query($db,"SELECT estudiante.ide FROM estudiante JOIN grupo ON estudiante.idg = grupo.idg WHERE grupo.nombre='$grupo'") ;

echo "<table class='tabla'>
<tr>
<th>nombre</th>
<th>apellido</th>
<th>nota</th>
<th>periodo</th>

</tr>";

  while($row = mysqli_fetch_array($result)) {
    $estudiante = $row['ide'];
    $final=mysqli_query($db,"SELECT * FROM usuario JOIN estudiante ON
    usuario.idu = estudiante.idu JOIN promedio on estudiante.ide = promedio.ide JOIN grupo ON estudiante.idg = grupo.idg where estudiante.ide=$estudiante order by periodo desc limit 1");
  $linea = mysqli_fetch_array($final);
 
  echo "<tr>";
  echo "<td>" . $linea['2'] . "</td>";
  echo "<td>" . $linea['apellido'] . "</td>";
  echo "<td>" . $linea['nota'] . "</td>";
  echo "<td>" . $linea['periodo'] . "</td>";
  echo "</tr>";

}
  echo "</table>";


  
?>