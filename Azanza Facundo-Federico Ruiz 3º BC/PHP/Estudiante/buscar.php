<?php 
    include_once "../connect.php";
    require '../conexion.php';
    $Nota = $_POST['nota'];
	$stmt = $pdo->query("SELECT * FROM promedio WHERE nota = '$Nota' ");
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    echo json_encode($rows);
?>