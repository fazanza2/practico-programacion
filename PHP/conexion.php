<?php

$server = 'localhost:3306';
$usuario = 'root';
$contraseña = '';
$basededatos = 'pweb';


$conexion = mysqli_connect($server, $usuario, $contraseña, $basededatos);
if($conexion->connect_error){
  die("conexion fallida" . $conexion->connect_error);
}

?>