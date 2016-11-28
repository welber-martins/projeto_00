<?php

include "../conexao/conn.php";



mysqli_set_charset($conn, 'utf8');


$valor = $_POST['valor'];
$data = date("d/m/Y");
$dtransf = explode ("/", $data);
$dtransf = "$dtransf[2]-$$dtransf[1]-$dtransf[0]";
$id = $_POST['cliente_id'];
$idcon = $_POST['contratos_id'];



	$stmt = $conn->prepare("INSERT INTO recebimento  VALUES (NULL,'$id', '$idcon', '$valor', '$dtransf')");
	$stmt->bind_param('ssss', $valor, $id, $idcon, $valor, $dtransf );
	if(!$stmt->execute()) {
		$erro = $stmt->error;
	} else {
	header("Location: ../agendar.php");
}else{

	echo "Falha na conexão: (".$mysqli->connect_errno.") ".$conn->connect_error;
}



$id = $_POST['id'];

	$sql = "DELETE * FROM recebimento WHERE id = $id ";
	$result = mysql_query($sql);
	mysql_close();
	header("location: ../agendar.php");




?>