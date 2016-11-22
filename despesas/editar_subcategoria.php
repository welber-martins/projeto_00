<?php
	$id = $_GET['id'];

	include_once "../conexao/conn.php";
	mysqli_set_charset($conn, 'utf8');
	$result = $conn->query("SELECT * FROM subcategoria WHERE id = $id");

	$aux_query = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1"/>
	<title>Editar Contato</title>
	<link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="../bootstrap/css/bootstrap-responsive.min.css">
	<link rel="stylesheet" href="../bootstrap/css/formatalayout.css">
	<link rel="stylesheet" href="../bootstrap/css/estilos.css">
	<script type="text/javascript" src="../bootstrap/js/jquery.js"></script>
</head>

<body>
	</header>
	<br>
	<div class="container">
		<div class="row-fluid">
			<div class="span12">
				<form action="update_subcategoria.php" method="post">
				    <fieldset>
					    <legend><h2>Edite:</h2></legend>
					    	<label></label>
					    	<div class="col-xs-1">
					    	<input class="form-control" type="text" name="id" value="<?php echo $aux_query['id']; ?>" readonly="readonly"></div></br></br>

						        <div class="col-xs-4">
						          <label for="nome">Descrição:</label>
						          <input class="form-control" type="text" name="descricao" size="20" placeholder="Descrição" value="<?php echo $aux_query['descricao']; ?>" required></br>
						        </div></br>
						        <div class="form-actions">
						            <button type="submit" class="btn btn-primary">Enviar</button>
						            <button type="reset" class="btn">Limpar</button>
					   				<button type="button" class="btn btn-danger" onclick="location.href='../subcategoria.php'">Cancelar</button>
						        </div>
						    </div><br>

				    </fieldset>
			    </form>
			    <br><a href="../subcategoria.php"> Voltar</a><br>
			</div>
		</div>
	</div>



	<script type="text/javascript" src="../bootstrap/js/bootstrap.min.js"></script>
</body>
</html>

<?php $conn = null; ?>