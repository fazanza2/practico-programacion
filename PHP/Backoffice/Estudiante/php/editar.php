<?php

require '../../../conexion.php';

$ide = $_POST['ide'];
$idg = $_POST['idg'];
$idu = $_POST['idu'];

  if (!empty($ide)) {
    $sql = "UPDATE promedio SET  idg='$idg' ,idu='$idu' WHERE ide='$ide'";
    $stmt = $conexion->query($sql);
    header("Location: ../../backoffice.php");   
  }
  ?>