<!DOCTYPE html>
<html lang="pt-BR">
<head>
	<meta charset="utf-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1"/>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css"/>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/style.css"/>
	<title>SIGETOQ</title>
</head>
<body>

<?php include("logo.php");?>
<div class="fora">
	<div id="margem">
	<h3><strong>Bem-Vindo</strong></h3>
	<h5>Acesse o SIGETOQ</h5>
	<form class="form" action= "cliente/db_login.php" method="POST">
		<div class="col-xs-12">
			 <label for="nome">Usuário:</label>
			 <input class="form-control"  type="text" name="nome" placeholder="Nome do Usuário">
		</div>
		<div class="col-xs-12">
			<label for="senha">Senha:</label>
			<input class="form-control"  type="password" name="senha" placeholder="***********">
		</div>
		<br/><br/><br/>
		<div class="buttom_a">
		<br/><br/><br/><br/>
			<p>
			<input type="submit" class="btn btn-primary btn-lg btn-block"" id="BTsEnvia" name="BTsEnvia" value="Logar">
			</p>
		</div>
	 </form>

	 </p>
	 <p><h5><a href='front/cadastro.php'>  Criar uma nova conta </a> </h5> </p>
	 <p><h5><a href='rec_senha.php'>  Esqueci Minha Senha </a> </h5> </p>
	</div>
</div>

<?php include("../front/rodape.php");?>

</body>
</html>