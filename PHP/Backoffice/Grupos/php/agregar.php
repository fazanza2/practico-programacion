<?php

require '../../../conexion.php';

$nombre = $_POST['nombre'];
$materia = $_POST['materia'];

  $message = '';
    if (!empty($nombre) && !empty($materia)) {
        $sql = "INSERT INTO grupo ( nombre , materia) VALUES ('$nombre', '$materia')";
        $stmt = $conexion->query($sql);
        header("Location: ../../backoffice.php");
        
    }
    ?>