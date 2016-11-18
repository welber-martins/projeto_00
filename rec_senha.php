<?php
//including the database connection file
include_once("conexao/conn.php");


$sql = "SELECT * FROM recebimento ORDER BY id DESC";
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>SIGTOQ</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="bootstrap/css/style.css">
</head>
<body>
<?php include("logo.php");?>
<div class="container">
  <div class="row">
    <h2><strong><center>Recuperação de senha</center></strong></h2></br></br>

 
<form action="despesas/db_agenda.php" method="POST">
      <div class="col-xs-6">
      <label for="nome">Nome:</label>
          <input class="form-control" type="text" name="nome" size="20" placeholder="Seu nome" required>
      </div>

      <div class="col-xs-6">
      <label for="nome">Chave:</label>
          <input class="form-control" type="text" name="chave" size="20" placeholder="Informe a chave" required>
      </div>
    <div class="buttom">
      <br/><br/><br/><br/><br/>
      <p>
      <button type="submit" class="btn btn-primary" value="Enviar" name="enviar" >Enviar</button>
      <button type="button" class="btn btn-danger" onclick="location.href='index.php'">Cancelar</button>
      </p>
     </div>

  </div>
</div>
</form>

<?php include("front/rodape.php");?>

<script src="bootstrap/js/bootstrap.js"></script>
<script src="bootstrap/js/novo.js"></script>


</body>
</html>