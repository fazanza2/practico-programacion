<?php

require 'conexion.php';

$ci = $_POST['ci'];
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$pass = $_POST['pass'];
  $message = '';
    if (!empty($ci) && !empty($nombre) && !empty($apellido) && !empty($pass)) {
        $sql = "INSERT INTO usuario (ci, nombre ,apellido, pass) VALUES ('$ci', '$nombre', '$apellido', '$pass')";
        $stmt = $conexion->query($sql);
        header("Location: ./../../index.php");
        
    }       
?>