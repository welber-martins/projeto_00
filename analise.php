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

<?php
     $domingo  = "style=color:#C30;";
     $hoje     = "style=color:#CC0;";

     $mes  = date("m");
     $dia  = date("d");
     $ano  = date("Y");
     $ano_ = substr($ano,-2);

     function meses($a)  {
              switch($a) {
                     case 1:  $mes = "janeiro";   break;
                     case 2:  $mes = "fevereiro"; break;
                     case 3:  $mes = "março";     break;
                     case 4:  $mes = "abril";     break;
                     case 5:  $mes = "maio";      break;
                     case 6:  $mes = "junho";     break;
                     case 7:  $mes = "julho";     break;
                     case 8:  $mes = "agosto";    break;
                     case 9:  $mes = "setembro";  break;
                     case 10: $mes = "outubro";   break;
                     case 11: $mes = "novembro";  break;
                     case 12: $mes = "Dezembro";  break;
              }
              return $mes;
     }
?>
<table class="table table-striped table-bordered" summary="Calendário" class="calendario">
 <caption><?php echo "".meses($mes)." ".$ano.""; ?></caption>
  <thead>
    <tr>
    <th>Contratos</th>
         <th abbr="Segunda" title="Segunda"><b>Segunda</b></th>
         <th abbr="Terça"   title="Terça"><b>Terça</b></th>
         <th abbr="Quarta"  title="Quarta"><b>Quarta</b></th>
         <th abbr="Quinta"  title="Quinta"><b>Quinta</b></th>
         <th abbr="Sexta"   title="Sexta"><b>Sexta</b></th>
         <th abbr="Sábado"  title="Sábado"><b>Sábado</b></th>
         <th abbr="Domingo" title="Domingo"><b <?php echo("$domingo");?>>Domingo</b></th>
      

    </tr>
  </thead>
    <tbody>
    <!--Começa o CRUD -->
      <?php
      mysqli_set_charset($conn, 'utf8');
       $result = $conn->query("SELECT * FROM cliente");
       while ($aux_query = $result->fetch_assoc()){
        echo '<tr>';
        //echo '<td> '.$aux_query["id"].'';
        echo '<td> '.$aux_query["empresa"].'';
        //echo '<td> '.$aux_query["vencimento"].'';
       }
      ?>
    </tbody>
  </table>

  <table class="table table-striped table-bordered" summary="Calendário" class="calendario">
 <caption><?php echo "".meses($mes)." ".$ano.""; ?></caption>
  <thead>
    <tr>
    <th>Contratos</th>
         <th abbr="Segunda" title="Segunda"><b>Segunda</b></th>
         <th abbr="Terça"   title="Terça"><b>Terça</b></th>
         <th abbr="Quarta"  title="Quarta"><b>Quarta</b></th>
         <th abbr="Quinta"  title="Quinta"><b>Quinta</b></th>
         <th abbr="Sexta"   title="Sexta"><b>Sexta</b></th>
         <th abbr="Sábado"  title="Sábado"><b>Sábado</b></th>
         <th abbr="Domingo" title="Domingo"><b <?php echo("$domingo");?>>Domingo</b></th>

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
       }
      ?>
    </tbody>
  </table>
</div>





<?php include("front/rodape.php");?>

<script src="bootstrap/js/bootstrap.js"></script>
<script src="bootstrap/js/novo.js"></script>


</body>
</html>