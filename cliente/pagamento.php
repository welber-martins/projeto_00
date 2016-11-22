<!DOCTYPE html>
<html lang="pt-BR">
<head>
	<meta charset="utf-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1"/>
	<link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.css"/>
	<link rel="stylesheet" type="text/css" href="../bootstrap/css/style.css"/>
	<title>SIGETOQ</title>
</head>
<body>
<?php

?>

<?php include("../front/logo.php");?>
<div class="outro">
	
	<h3><strong>Agendamento</strong></h3>
	<form class="form" action="<? $PHP_SELF; ?>" method="POST"> 
		<div class="col-xs-12">
			<label for="nome">Categoria</label>
			<input class="form-control" id="nome" type="text" name="nome" placeholder="Descrição">
		</div>
		<div class="buttom_a">
		<br/><br/><br/><br/>
			<p>
			<input type="submit" class="btn btn-primary btn-lg btn-block"" name="BTEnvia" value="Login">
			</p>
		</div>
	</form>
	</div>
</div>

<?php include("../front/rodape.php");?>
</body>
</html>