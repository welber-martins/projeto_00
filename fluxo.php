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
<?php include("principal.php");?>
<div class="container">
  <div class="row">

<form action="despesas/db_agenda.php" method="POST">
	<table class="table table-striped table-bordered">
  <thead>
    <tr>
      <th>Data</th>
      <th>Descrição</th>
      <th>Categoria</th>
      <th>Valor</th>
      <th>Saldo</th>
    </tr>
  </thead>
    <tbody>
    <!--Começa o CRUD -->
      <?php
      mysqli_set_charset($conn, 'utf8');
       $result = $conn->query("SELECT * from (recebimento inner join contratos on recebimento.contratos_id = contratos.id)
inner join cliente on recebimento.cliente_id = cliente.id;");
       while ($aux_query = $result->fetch_assoc()){
        echo '<tr>';
        //echo '<td> '.$aux_query["id"].'';
        echo '<td> '.$aux_query["vencimento"].'';
        echo '<td> '.$aux_query["numero"].'';
        echo '<td> '.$aux_query["empresa"].'';
        echo '<td> '.$aux_query["valor"].'';
        
        echo '<tr>'; }
      ?>
    </tbody>
  </table>








</form>
<?php include("front/rodape.php");?>

<script src="bootstrap/js/bootstrap.js"></script>
<script src="bootstrap/js/novo.js"></script>


</body>
</html>