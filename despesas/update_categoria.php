<?php 

	$id = $_POST['id'];
	$firstname = $_POST['descricao'];


	include_once "../conexao/conn.php";

	$result = $conn->query("UPDATE categoria SET descricao = '$firstname'
			WHERE id = $id");

	$conn = null;

	header("location: ../categoria.php");
 ?>
