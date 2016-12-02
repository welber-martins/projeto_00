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
    <h2><strong><center>Agendar</center></strong></h2></br></br>

<form action="despesas/db_agenda.php" method="POST">

      <!--A tabela de demonstração -->
    <div class="col-xs-12">
    <label for="nome">Empresa:</label>
    <select id="cliente_id" name="cliente_id" class="form-control">
        <?php
          $sql="SELECT * FROM cliente ORDER BY id DESC";
          $res =mysqli_query($conn, $sql);
          while ($vreq = mysqli_fetch_row($res)) {
            $vid=$vreq[0];
            $vempresa=$vreq[1];
            echo "<option value=$vid>$vempresa</option>";
          }
        ?> 
        </select>
       </div>
       <div class="col-xs-12">
       <label for="nome">Contrato:</label>
       <select id="contratos_id" name="contratos_id" class="form-control">
        <?php
          $sql="SELECT * FROM contratos ORDER BY id DESC";
          $res =mysqli_query($conn, $sql);
          while ($vreq = mysqli_fetch_row($res)) {
            $vid=$vreq[0];
            $vnumero=$vreq[1];
            echo "<option value=$vid>$vnumero</option>";
          }
        ?> 
        </select> 

      <div class="col-xs-4">
      <label for="sobrenome">Valor:</label>
        <input class="form-control" name="valor" type="text" value="" id="valor" size="10" maxlength="10" >
      </div>
      <div class="col-xs-4">
      <label for="meeting">Vencimento:</label>
      <input class="form-control" id="vencimento" name="vencimento" type="date" value="2016-01-01"/>
    </div>
    <div class="col-xs-4">
        <label for="nome">Arquivo:</label>
        <input class="form-control" type="file" name="arquivo" >
      </div><br>
    <div class="buttom">
      <br/><br/><br/><br/>
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