<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1"/>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css"/>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/style.css"/>
	<link rel="stylesheet" type="text/css" href="multimenu.css" />
	<title>SIGETOQ</title>
</head>
<body>
<header>

<?php include("logo.php");?>

<nav class="navbar navbar-default">
  <div class="container-fluid">
    
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
      </button>
      <a class="navbar-brand" href="principal.php">SIGETOQ</a>
    </div>

    
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Recebimento<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="outros.php">Cliente</a></li>
            <li><a href="contratos.php">Contratos</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="agendar.php">Agendar</a></li>
          </ul>
        </li>
      </ul>
      <ul class="nav navbar-nav">
      <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Pagamento<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="categoria.php">Categoria</a></li>
            <li><a href="subcategoria.php">Subcategoria</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="agendar_desp.php">Agendar</a></li>
          </ul>
        </li>
        </ul>
        <ul class="nav navbar-nav">
      <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Análise e relatório<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Fluxo de caixa</a></li>
          </ul>
        </li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
        <li><a href="logout.php">Sair</a></li>
        </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

</body>
</html>