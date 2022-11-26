<?php
include("../../conexion.php");
$sql="SELECT * FROM promedio";
$resultado = mysqli_query($conexion,$sql);

echo "<div>
        <button onclick='APromedio()'>Insertar</button>
        <button onclick='MPromedio()'>Editar</button>
        <button onclick='EPromedio()'>Eliminar </button>
        ";

echo "<table >
<tr>
<th>ide</th>
<th>idp</th>
<th>periodo</th>
<th>nota</th>


</tr>";
while($row = mysqli_fetch_array($resultado)) {
  echo "<tr>";
  echo "<td>" . $row['ide'] . "</td>";
  echo "<td>" . $row['idp'] . "</td>";
  echo "<td>" . $row['periodo'] . "</td>";
  echo "<td>" . $row['nota'] . "</td>";  
  echo "</tr>";
}
echo "</table>";
mysqli_close($conexion);


?>