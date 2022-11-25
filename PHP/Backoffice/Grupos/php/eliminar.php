<?php

require '../../../conexion.php';

$idg = $_POST['idg'];

$message = '';
  
if (!empty($idg)) {
  $sql = "DELETE FROM grupo WHERE idg=".$idg."";
  $stmt = $conexion->query($sql);
  header("Location: ../../backoffice.php");
}
?>
