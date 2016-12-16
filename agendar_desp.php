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
    <h2><strong><center>Agendar</center></strong></h2></br>

      <!--A tabela de demonstração -->
    <form action="despesas/des_db.php" method="POST" enctype="multipart/form-data">
    <div class="col-xs-12">
    <label for="nome">Categoria:</label>
    <select id="categoria_id" name="categoria_id" class="form-control">
          <option value="0">-- Selecione --</option>
        <?php
          $sql="SELECT * FROM categoria ORDER BY id DESC";
          $res =mysqli_query($conn, $sql);
          while ($vreq = mysqli_fetch_row($res)) {
            $vid=$vreq[0];
            $vdescricao=$vreq[1];
            echo "<option value=$vid>$vdescricao</option>";
          }
        ?> 
        </select><br>
       </div>
       <div class="col-xs-12">
       <label for="nome">Subcategoria:</label>
       <select id="subcategoria_id" name="subcategoria_id" class="form-control">
          <option value="0">-- Selecione --</option>
        <?php
          $sql="SELECT * FROM subcategoria ORDER BY id DESC";
          $res =mysqli_query($conn, $sql);
          while ($vreq = mysqli_fetch_row($res)) {
            $vid=$vreq[0];
            $vdescricao=$vreq[1];
            echo "<option value=$vid>$vdescricao</option>";
          }
        ?> 
        </select><br>
       </div>



      <div class="col-xs-4">
      <label for="meeting">Vencimento:</label>
      <input class="form-control" id="meeting" name="data_pagamento" id="data_pagamento" type="date" value="2016-01-01"/>
    </div>

    <div class="col-xs-4">
      <label for="sobrenome">Valor:</label>
        <input class="form-control" name="valor" type="text" id="valor"  size="10" maxlength="10" >
      </div>
      <div class="col-xs-4">
        <label for="nome">Arquivo:</label>
        <input class="form-control" type="file" name="descricao">
      </div><br>

      <div class="form-group">
        <label for="comment">Descrição:</label>
        <textarea class="form-control" rows="3" name="observacao" id="observacao"></textarea>
      </div>

    <div class="buttom">

      <p>
        <input type="submit" class="btn btn-primary btn-lg"  value="Enviar" name="enviar">
      </p>
     </div>

  </div>
</div>
</form>


<script src="bootstrap/js/bootstrap.js"></script>
<script src="bootstrap/js/novo.js"></script>


</body>
</html>