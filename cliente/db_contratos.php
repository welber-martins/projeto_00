<?php

include "../conexao/conn.php";



mysqli_set_charset($conn, 'utf8');


$numero=$_POST['numero'];
$id =$_GET['cliente_id']

	$stmt = $conn->prepare("INSERT INTO contratos (numero,cliente_id) VALUES (??)");
	$stmt->bind_param('ss', $numero, $id);
	if(!$stmt->execute()) {
		$erro = $stmt->error;
	} else {
	header("Location: ../contratos.php");
}

$id = $_POST['id'];

	$sql = "DELETE * FROM contratos WHERE id = $id ";
	$result = mysql_query($sql);
	mysql_close();
	header("location: ../contratos.php");




?>