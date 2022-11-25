<?php
include("../../conexion.php");
$sql="SELECT * FROM usuario";
$resultado = mysqli_query($conexion,$sql);

echo "<div>
        <button onclick='AEstudiante()'>Insertar</button>
        <button onclick='MEstudiante()'>Editar</button>
        <button onclick='EEstudiante()'>Eliminar </button>
        ";

echo "<table>
<tr>
<th>idu</th>
<th>ci</th>
<th>nombre</th>
<th>apellido</th>
<th>pass</th>

</tr>";
while($row = mysqli_fetch_array($resultado)) {
  echo "<tr>";
  echo "<td>" . $row['idu'] . "</td>";
  echo "<td>" . $row['ci'] . "</td>";
  echo "<td>" . $row['nombre'] . "</td>";
  echo "<td>" . $row['apellido'] . "</td>";
  echo "<td>" . $row['pass'] . "</td>";

  echo "</tr>";
}
echo "</table>";
mysqli_close($conexion);


?>