<?php

include "../conexao/conn.php";



mysqli_set_charset($conn, 'utf8');


$descricao = $_POST['descricao'];


	$stmt = $conn->prepare("INSERT INTO categoria (descricao) VALUES (?)");
	$stmt->bind_param('s', $descricao);
	if(!$stmt->execute()) {
		$erro = $stmt->error;
	} else {
	header("Location: ../categoria.php");
}

$id = $_POST['id'];

	$sql = "DELETE * FROM categoria WHERE id = $id ";
	$result = mysql_query($sql);
	mysql_close();
	header("location: ../categoria.php");




?>