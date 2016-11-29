<?php

include "../conexao/conn.php";
//INSERT INTO recebimento (cliente_id, contratos_id, valor, vencimento, efetuado) 
//VALUES (1,2,33,curdate(),0);


mysqli_set_charset($conn, 'utf8');


$valor = $_POST['valor'];
$idd = $_POST['cliente_id'];
$idcon = $_POST['contratos_id'];
$date = date("Y-m-d", strtotime($_POST['vencimento']));



	$query = "INSERT INTO recebimento (cliente_id, contratos_id, valor, vencimento) VALUES ('$idd', '$idcon', '$valor', '$date')";


	//die( $query );

	// Executa a query
	$inserir = mysql_query($query);
	if ($inserir) {
	echo "Notícia inserida com sucesso!";
	} else {
	echo "Não foi possível inserir a notícia, tente novamente.";
	// Exibe dados sobre o erro:
	echo "Dados sobre o erro:" . mysql_error();
	}



$id = $_POST['id'];

	$sql = "DELETE * FROM recebimento WHERE id = $id ";
	$result = mysql_query($sql);
	mysql_close();
	header("location: ../agendar.php");




?>