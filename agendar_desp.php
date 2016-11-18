<?php
//including the database connection file
include_once("conexao/conn.php");


$sql = "SELECT * FROM despesas ORDER BY id DESC";
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
<?php include("principal.php");?>
<div class="container">
  <div class="row">
    <h2><strong><center>Agendar</center></strong></h2></br></br>

      <!--A tabela de demonstração -->
    <form action="despesas/des_db.php" method="POST">
    <div class="col-xs-12">
    <label for="nome">Categoria:</label>
    <select class="form-control">
      <!--Começa o CRUD -->
        <?php
        mysqli_set_charset($conn, 'utf8');
         $result = $conn->query("SELECT * FROM categoria");
         while ($aux_query = $result->fetch_assoc()){
          echo '<option> '.$aux_query["descricao"].'';
           }
        ?>

       </select>
       </div>
       <div class="col-xs-12">
       <label for="nome">Subcategoria:</label>
       <select class="form-control">
      <!--Começa o CRUD -->
      <?php
      mysqli_set_charset($conn, 'utf8');
       $result = $conn->query("SELECT * FROM subcategoria");
       while ($aux_query = $result->fetch_assoc()){
         echo '<option> '.$aux_query["descricao"].'';
           }
        ?>
        </select>
       </div>



      <div class="col-xs-4">
      <label for="meeting">Vencimento:</label>
      <input class="form-control" id="meeting" name="vencimento" type="date" value="2016-01-01"/>
    </div>

    <div class="col-xs-4">
      <label for="sobrenome">Valor:</label>
        <input class="form-control" name="valor" type="text" value="" id="valor" onKeyPress="return BloqueiaLetras(event)" size="10" maxlength="10" >
      </div>
      <div class="col-xs-4">
        <label for="nome">Arquivo:</label>
        <input class="form-control" type="file" name="arquivo" required>
      </div><br>

      <div class="form-group">
        <label for="comment">Descrição:</label>
        <textarea class="form-control" rows="3" id="comment"></textarea>
      </div>

    <div class="buttom">

      <p>
        <input type="submit" class="btn btn-primary btn-lg"  value="Enviar" name="enviar">
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