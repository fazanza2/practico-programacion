<?php

require '../../../conexion.php';

$idp = $_POST['idp'];
$ide = $_POST['ide'];
$periodo = $_POST['periodo'];
$nota = $_POST['nota'];

  if (!empty($idp)) {
    $sql = "UPDATE promedio SET  ide='$ide' ,periodo='$periodo', nota='$nota' WHERE idp='$idp'";
    $stmt = $conexion->query($sql);
    header("Location: ../../backoffice.php");   
  }
  ?>