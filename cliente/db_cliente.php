<?php

include "../conexao/conn.php";



mysqli_set_charset($conn, 'utf8');


$empresa=$_POST['empresa'];


	$stmt = $conn->prepare("INSERT INTO cliente (empresa) VALUES (?)");
	$stmt->bind_param('s', $empresa);
	if(!$stmt->execute()) {
		$erro = $stmt->error;
	} else {
	header("Location: ../outros.php");
}

$id = $_POST['id'];

	$sql = "DELETE * FROM cliente WHERE id = $id ";
	$result = mysql_query($sql);
	mysql_close();
	header("location: ../outros.php");




?>

