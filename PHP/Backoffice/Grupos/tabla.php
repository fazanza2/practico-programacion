<?php
include("../../conexion.php");
$sql="SELECT * FROM grupo";
$resultado = mysqli_query($conexion,$sql);

echo "<div>
        <button onclick='AGrupos()'>Insertar</button>
        <button onclick='MGrupos()'>Editar</button>
        <button onclick='EGrupos()'>Eliminar </button>
        ";

echo "<table>
<tr>
<th>idg</th>
<th>nombre</th>
<th>materia</th>

</tr>";
while($row = mysqli_fetch_array($resultado)) {
  echo "<tr>";
  echo "<td>" . $row['idg'] . "</td>";
  echo "<td>" . $row['nombre'] . "</td>";
  echo "<td>" . $row['materia'] . "</td>";
  echo "</tr>";
}
echo "</table>";
mysqli_close($conexion);


?>