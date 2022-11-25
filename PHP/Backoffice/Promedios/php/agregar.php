<?php

require '../../../conexion.php';

$ide = $_POST['ide'];
$periodo = $_POST['periodo'];
$nota = $_POST['nota'];

  $message = '';
    if ( !empty($ide) && !empty($periodo) && !empty($nota)) {
        $sql = "INSERT INTO promedio (ide, periodo ,nota ) VALUES ('$ide', '$periodo', '$nota')";
        $stmt = $conexion->query($sql);
        header("Location: ../../backoffice.php");
        
    }       
?>