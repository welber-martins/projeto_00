<?php

	$id = $_POST['id'];
	$firstname = $_POST['empresa'];


	include_once "../conexao/conn.php";

	$result = $conn->query("UPDATE cliente SET empresa = '$firstname'
			WHERE id = $id");

	$conn = null;

	header("location: ../outros.php");
 ?>
