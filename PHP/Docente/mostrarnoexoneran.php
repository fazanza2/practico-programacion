<?php
include("../conexion.php");
$sql="SELECT * FROM promedio where nota<8";
$resultado = mysqli_query($conexion,$sql);

echo "<div>
        <button onclick='ICompetición()'>Insertar</button>
        <button onclick='MCompetición()'>Editar</button>
        <button onclick='ECompetición()'>Eliminar </button>
        ";

echo "<table>
<tr>
<th>idp</th>
<th>ide</th>
<th>periodo</th>
<th>nota</th>
</tr>";
while($row = mysqli_fetch_array($resultado)) {
  echo "<tr>";
  echo "<td>" . $row['idp'] . "</td>";
  echo "<td>" . $row['ide'] . "</td>";
  echo "<td>" . $row['periodo'] . "</td>";
  echo "<td>" . $row['nota'] . "</td>";
  echo "</tr>";
}
echo "</table>";
mysqli_close($conexion);

?>