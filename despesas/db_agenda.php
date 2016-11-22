<?php

include "../conexao/conn.php";



mysqli_set_charset($conn, 'utf8');


$valor = $_POST['valor'];
//$vencimento = $_POST['vencimento'];


	$stmt = $conn->prepare("INSERT INTO recebimento (valor) VALUES (?)");
	$stmt->bind_param('s', $valor);
	if(!$stmt->execute()) {
		$erro = $stmt->error;
	} else {
	header("Location: ../agendar.php");
}

$id = $_POST['id'];

	$sql = "DELETE * FROM recebimento WHERE id = $id ";
	$result = mysql_query($sql);
	mysql_close();
	header("location: ../agendar.php");




?>