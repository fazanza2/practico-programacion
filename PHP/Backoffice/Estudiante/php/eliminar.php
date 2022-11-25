<?php

require '../../../conexion.php';

$ci = $_POST['ci'];

$message = '';
  
if (!empty($ci)) {
  $sql = "DELETE FROM usuario WHERE ci=".$ci."";
  $stmt = $conexion->query($sql);
  header("Location: ../../backoffice.php");
}
?>