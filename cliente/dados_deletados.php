<?php

	$id = $_GET['id'];

	include_once "../conexao/conn.php";

	$sql = "DELETE FROM cliente WHERE id = $id ";
	$result = $conn->query($sql);

	$conn = null;

	header("location:../outros.php");

 ?>