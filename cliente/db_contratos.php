<?php

include "../conexao/conn.php";



mysqli_set_charset($conn, 'utf8');


$numero=$_POST['numero'];
$idd =$_POST['cliente_id'];

	$stmt = $conn->prepare("INSERT INTO contratos VALUES (NULL, '$numero', '$idd')");
	$stmt->bind_param('ss', $numero, $idd);
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
