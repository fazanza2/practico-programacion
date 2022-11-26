<?php

require '../../../conexion.php';

$idg = $_POST['idg'];
$idu = $_POST['idu'];

  $message = '';
    if (!empty($idg) && !empty($idu)) {
        $sql = "INSERT INTO promedio (idg, idu ) VALUES ('$idg', '$idu')";
        $stmt = $conexion->query($sql);
        header("Location: ../../backoffice.php");
        
    }       
?>