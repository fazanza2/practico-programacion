<?php
include("../Docente/conexion.php");

$ci=mysqli_real_escape_string($db,$_GET['ci']); 
 
$pass=mysqli_real_escape_string($db,$_GET['pass']); 
$result=mysqli_query($db,"SELECT nota, periodo FROM usuario JOIN estudiante ON
usuario.idu = estudiante.idu JOIN promedio on estudiante.ide = promedio.ide WHERE ci='$ci' and pass='$pass'") ;

echo "<table class='tabla'>
<tr>
<th>nota</th>
<th>periodo</th>

</tr>";

  while($row = mysqli_fetch_array($result)) {
  echo "<tr>";
  echo "<td>" . $row['nota'] . "</td>";
  echo "<td>" . $row['periodo'] . "</td>";
  echo "</tr>";

}
  echo "</table>";
?>