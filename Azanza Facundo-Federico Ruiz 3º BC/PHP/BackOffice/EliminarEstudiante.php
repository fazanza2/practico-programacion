<?php

  require 'conexion.php';

  $ci = $_POST['ci'];

  $message = '';
    
  if (!empty($CI)) {
    $sql = "DELETE FROM usuario WHERE ci=".$ci."";
    $stmt = $conexion->query($sql);
    header("Location: ./../../index.php");
  }
  ?>