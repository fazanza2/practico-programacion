<?php

require '../../../conexion.php';

$idg = $_POST['idg'];
$nombre = $_POST['nombre'];
$materia = $_POST['materia'];

  if (!empty($idg)) {
    $sql = "UPDATE grupo SET nombre='$nombre' , materia='$materia' WHERE idg='$idg'";
    $stmt = $conexion->query($sql);
    header("Location: ../../backoffice.php"); 
  }