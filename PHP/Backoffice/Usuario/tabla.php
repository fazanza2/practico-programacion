<?php
include("../../conexion.php");
$sql="SELECT * FROM usuario";
$resultado = mysqli_query($conexion,$sql);

echo "<div>
        <button onclick='AUsuario()'>Insertar</button>
        <button onclick='MUsuario()'>Editar</button>
        <button onclick='EUsuario()'>Eliminar </button>
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