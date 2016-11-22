<?php

include "../conexao/conn.php"; 




	$nome = $_POST['nome'];
	$sobrenome = $_POST['sobrenome'];
	$senha = $_POST['senha'];

mysqli_set_charset($conn, 'utf8');

$sql = "INSERT INTO usuario (nome, sobrenome, senha)
VALUES ('$nome', '$sobrenome', '$senha')";

if ($conn->query($sql) === TRUE) {
    header("Location: ../index.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>