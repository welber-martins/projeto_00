<?php
include "../conexao/conn.php";


$_UP['pasta'] = '../arquivos/';
// Tamanho máximo do arquivo (em Bytes)
$_UP['tamanho'] = 1024 * 1024 * 2; // 2Mb

$_UP['extensoes'] = array( 'pdf','jpg', 'png', 'gif');

$_UP['renomeia'] = false;

$_UP['erros'][0] = 'Não houve erro';
$_UP['erros'][1] = 'O arquivo no upload é maior do que o limite do PHP';
$_UP['erros'][2] = 'O arquivo ultrapassa o limite de tamanho especifiado no HTML';
$_UP['erros'][3] = 'O upload do arquivo foi feito parcialmente';
$_UP['erros'][4] = 'Não foi feito o upload do arquivo';

if ($_FILES['arquivo']['error'] != 0) {
  die("Não foi possível fazer o upload, erro:" . $_UP['erros'][$_FILES['arquivo']['error']]);
  exit; 
}

$extensao = strtolower(end(explode('.', $_FILES['arquivo']['name'])));
if (array_search($extensao, $_UP['extensoes']) === false) {
  echo 
 		"<meta http-equiv='refresh' content='0; url=../arquivos.php' />
 		<script type='text/javascript'>alert('Por favor, envie arquivos com as seguintes extensões: pdf, jpg, png ou gif')</script>
 		";
  exit;
}

if ($_UP['tamanho'] < $_FILES['arquivo']['size']) {
  echo 
  "<meta http-equiv='refresh' content='0; url=../arquivos.php' />
 		<script type='text/javascript'>alert('O arquivo enviado é muito grande, envie arquivos de até 2Mb')</script>
 		";

  exit;
}

if ($_UP['renomeia'] == true) {
 
  $nome_final = md5(time()).'.pdf';
} else {
  
  $nome_final = $_FILES['arquivo']['name'];
}
  

if (move_uploaded_file($_FILES['arquivo']['tmp_name'], $_UP['pasta'] . $nome_final)) {
  
  echo "Upload efetuado com sucesso!";
  echo '<a href="arquivos.php"' . $_UP['../arquivos/'] . $nome_final . '">Clique aqui para acessar o arquivo</a>';
} else {
  
  echo "Não foi possível enviar o arquivo, tente novamente";
}