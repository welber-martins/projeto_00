<?php

include "../conexao/conn.php";



mysqli_set_charset($conn, 'utf8');


$des = $_POST['descricao'];
$idd =$_POST['categoria_id'];

	$stmt = $conn->prepare("INSERT INTO subcategoria VALUES (NULL, '$des', '$idd')");
	$stmt->bind_param('ss', $des, $idd);
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