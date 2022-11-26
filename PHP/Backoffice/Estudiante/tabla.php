<?php
include("../../conexion.php");
$sql="SELECT * FROM Estudiante";
$resultado = mysqli_query($conexion,$sql);

echo "<div>
        <button onclick='AEstudiante()'>Insertar</button>
        <button onclick='MEstudiante()'>Editar</button>
        <button onclick='EEstudiante()'>Eliminar </button>
        ";

echo "<table class='tabla'>
<tr>
<th>ide</th>
<th>idu</th>
<th>idg</th>

</tr>";
while($row = mysqli_fetch_array($resultado)) {
  echo "<tr>";
  echo "<td>" . $row['ide'] . "</td>";
  echo "<td>" . $row['idu'] . "</td>";
  echo "<td>" . $row['idg'] . "</td>";
  echo "</tr>";
}
echo "</table>";
mysqli_close($conexion);


?>