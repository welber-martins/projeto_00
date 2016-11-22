<?php

include "../conexao/conn.php";



mysqli_set_charset($conn, 'utf8');


$valor = $_POST['valor'];
$vencimento = $_POST['vencimento'];
$

	$stmt = $conn->prepare("INSERT INTO  (despesas) VALUES (?)");
	$stmt->bind_param('s', $des);
	if(!$stmt->execute()) {
		$erro = $stmt->error;
	} else {
	header("Location: ../subcategoria.php");
}

$id = $_POST['id'];

	$sql = "DELETE * FROM subcategoria WHERE id = $id ";
	$result = mysql_query($sql);
	mysql_close();
	header("location: ../subcategoria.php");




?>