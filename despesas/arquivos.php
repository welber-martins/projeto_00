<?php
//including the database connection file
include_once("conexao/conn.php");


$sql = "SELECT * FROM arquivos ORDER BY id DESC";
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
  <h2><strong><center>Arquivos</center></strong></h2></br></br>
  <!--Onde insere o nome da empresa -->
    <form  action="cliente/db_upload.php" method="POST" enctype="multipart/form-data">
     <div class="col-xs-8">
        <label for="nome">Arquivo:</label>
        <input class="form-control" type="file" name="arquivo" required>
      </div><br>
     <input type="submit" class="btn btn-primary" value="Salvar" name="botao">
      <button type="reset" class="btn">Limpar</button>
    </form><br><br>
    <!--A tabela de demonstração -->
  <table class="table table-striped table-bordered">
  <thead>
    <tr>
      <th>Descrição</th>
      <th>Download</th>
    </tr>
  </thead
    <tbody>
    <!--Começa o CRUD -->
      <?php
      mysqli_set_charset($conn, 'utf8');
       $result = $conn->query("SELECT * FROM arquivos");
       while ($aux_query = $result->fetch_assoc()){
        echo '<tr>';
        //echo '<td> '.$aux_query["id"].'';
        echo '<td> '.$aux_query["descricao "].'';
        echo '<td width=230>';
        echo "<a class='btn btn-success' href=\"cliente/edi_contratos.php?id=".$aux_query['id']."\">Download</a> ";
        echo " <a class='btn btn-danger' href=\"cliente/del_contratos.php?id=".$aux_query['id']."#modaldel\">Deletar</a> ";;
        echo '<tr>'; }
      ?>
    </tbody>
  </table>
</div>

<?php include("rodape.php");?>

<script src="bootstrap/js/bootstrap.js"></script>
<script src="bootstrap/js/novo.js"></script>


</body>
</html>