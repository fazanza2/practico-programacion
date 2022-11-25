<?php

require '../../../conexion.php';

$idp = $_POST['idp'];

$message = '';
  
if (!empty($idp)) {
  $sql = "DELETE FROM promedio WHERE idp=".$idp."";
  $stmt = $conexion->query($sql);
  header("Location: ../../backoffice.php");
}
?>