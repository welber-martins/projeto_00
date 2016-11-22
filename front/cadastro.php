<!DOCTYPE html>
<html lang="pt-BR">
<head>
	<meta charset="utf-8" />
	<title>SIGTOQ</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="../bootstrap/css/style.css">
	
</head>
<body>

<?php include("logo.php");?>
<div class="fora">
	<div id="mar_cad">
		<h3><strong>Criar Conta</strong></h3>

		<form class="form" action="../cliente/form.php" method="POST"> 
			<div class="col-xs-12">
			  <label for="nome">Nome:</label>
			  <input class="form-control" id="nome" type="text" name="nome" size="20" placeholder="Nome" required>
			</div>
			<div class="col-xs-12">
			  <label for="sobrenome">Sobrenome</label>
			  <input class="form-control" id="sobrenome" type="text" name="sobrenome" size="20" placeholder="Sobrenome" required>
			</div>
			<div class="col-xs-12">
			  <label for="senha">Senha:</label>
			  <input class="form-control" id="senha" type="password" name="senha" size="15" placeholder="Senha" required>
			</div>
			<div class="col-xs-12">
			  <label for="senha">Confirme a Senha:</label>
			  <input class="form-control" id="senha" type="password" name="conf_senha" size="15" placeholder="Confirme" required oninput="validaSenha(this)"">
			</div>  
			<br/><br/><br/><br/><br/> <br/> <br/> <br/> <br/> 
			<div class="buttom">
			<br/><br/><br/><br/><br/> 
			<p>
		      <input type="submit" class="btn btn-primary"  value="Enviar" name="enviar">
			  <input type="reset" class="btn btn-primary" name="BTApaga" value="Apagar">
		     </p>
		     </div>
	    </form>
	    <p><h5> Já tenho uma conta<a href='../index.php'> Fazer Login </a> </h5> </p> 
    </div>
</div>

<?php include("rodape.php");?>

<script src="../bootstrap/js/bootstrap.js"></script>
<script src="../bootstrap/js/novo.js"></script>
</body>
</html>

