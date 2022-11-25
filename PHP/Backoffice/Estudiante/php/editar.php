<?php

require '../../../conexion.php';

$ci = $_POST['ci'];
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$pass = $_POST['pass'];
  if (!empty($ci)) {
    $sql = "UPDATE usuario SET  nombre='$nombre' ,apellido='$apellido', pass='$pass' WHERE ci='$ci'";
    $stmt = $conexion->query($sql);
    header("Location: ../../backoffice.php");   
  }