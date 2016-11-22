<?php
//conexão do banco de dados
	include("../conexao/conn.php");
//variaveis resebendo as informações
	$nome=$_POST['nome'];
	$senha=$_POST['senha'];
//selecionando as informações no banco de dados
	$sql="SELECT * FROM usuario WHERE nome = '$nome' AND senha='$senha'";
	$res=mysqli_query($conn,$sql);
	$linha = mysqli_affected_rows($conn);
//	
	if($linha > 0){
		$num=rand(100000,900000);
		setcookie("numLogin",$num);
		header("Location:../principal.php?num1=$num");
		
	}else{
		echo 
 		"<meta http-equiv='refresh' content='0; url=../index.php' />
 		<script type='text/javascript'>alert('Login ou Senha não corresponde.')</script>
 		";
	}
 	mysqli_close($conn);
?>