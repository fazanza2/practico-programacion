<?php

require '../../../conexion.php';

$ide = $_POST['ide'];

$message = '';
  
if (!empty($ide)) {
  $sql = "DELETE FROM promedio WHERE ide=".$ide."";
  $stmt = $conexion->query($sql);
  header("Location: ../../backoffice.php");
}
?>