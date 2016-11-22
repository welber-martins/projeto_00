<?php

	$id = $_POST['id'];
	$firstname = $_POST['numero'];


	include_once "../conexao/conn.php";

	$result = $conn->query("UPDATE contratos SET numero = '$firstname'
			WHERE id = $id");

	$conn = null;

	header("location: ../contratos.php");
 ?>
