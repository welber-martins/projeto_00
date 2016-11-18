<?php
//including the database connection file
include_once("conexao/conn.php");


$sql = "SELECT * FROM categoria ORDER BY id DESC";
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
  <h2><strong><center>Categorias</center></strong></h2></br></br>
  <!--Onde insere o nome da empresa -->
    <form action="despesas/db_categoria.php" method="POST">
        <div class="col-xs-7">
          <label for="nome">Descrição:</label>
          <input class="form-control" type="text" name="descricao" size="20" placeholder="Descrição" required></br>
        </div></br>
        <div class="form-actions">
            <input type="submit" class="btn btn-success"  value="Adicionar" name="enviar">

        </div>
    </form>
    <!--A tabela de demonstração -->
  <table class="table table-striped table-bordered">
  <thead>
    <tr>
      <th>Categorias</th>
      <th>Opção</th>
    </tr>
  </thead>
    <tbody>
    <!--Começa o CRUD -->
      <?php
      mysqli_set_charset($conn, 'utf8');
       $result = $conn->query("SELECT * FROM categoria");
       while ($aux_query = $result->fetch_assoc()){
        echo '<tr>';
        //echo '<td> '.$aux_query["id"].'';
        echo '<td> '.$aux_query["descricao"].'';
        echo '<td width=230>';
        echo "<a class='btn btn-success' href=\"despesas/editar_categoria.php?id=".$aux_query['id']."\">Editar</a> ";
        echo " <a class='btn btn-danger' href=\"despesas/deletar_categoria.php?id=".$aux_query['id']."#modaldel\">Deletar</a> ";
        echo '<tr>'; }
      ?>
    </tbody>
  </table>
</div>

<?php include("front/rodape.php");?>

<script src="bootstrap/js/bootstrap.js"></script>
<script src="bootstrap/js/novo.js"></script>


</body>
</html>