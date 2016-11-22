
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Deletar Dados?</title>
	<link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="../bootstrap/css/bootstrap-responsive.min.css">
	<link rel="stylesheet" href="../bootstrap/css/jquery.remodal.css">
	<link rel="stylesheet" href="">
	<script type="text/javascript" src="../bootstrap/js/jquery.js"></script>
</head>
<body>

<!-- ####### REMODAL ###### -->

	<div class="remodal-bg">
		<div class="remodal" data-remodal-id="modaldel">

			<?php
				mysqli_set_charset($conn, 'utf8');
				$id = $_GET['id'];

				include_once "../conexao/conn.php";

				$sql = "SELECT * FROM cliente WHERE id = $id";
				$result = $conn->query($sql);
				$aux_query = $result->fetch_assoc();

			?>

		    <?php
		    	mysqli_set_charset($conn, 'utf8');
				echo "<h3>Você deseja deletar esses dados?</h3>";

				//echo "id : <b>".$aux_query['id']."<b><br>";
				echo "Empresa : <b>".$aux_query['empresa']."<b><br>";


				echo "<a href=\"dados_deletados.php?id=".$aux_query['id']."\" class=\"btn btn-large btn-success\"> Sim</a>&nbsp;&nbsp;";
				echo "<a href=\"../outros.php\" class=\"btn btn-large btn-warning\"> Não</a>";

				$conn = null;

			?>
		    <br>
		</div>
	</div>

	<script type="text/javascript">
    $(document).on('open', '.remodal', function () {
        console.log('open');
    });

    $(document).on('opened', '.remodal', function () {
        console.log('opened');
    });

    $(document).on('close', '.remodal', function () {
        console.log('close');
    });

    $(document).on('closed', '.remodal', function () {
        console.log('closed');
    });

    $(document).on('confirm', '.remodal', function () {
        console.log('confirm');
    });

    $(document).on('cancel', '.remodal', function () {
        console.log('cancel');
    });

    // You can open or close it like this:
    // var inst = $.remodal.lookup[$('[data-remodal-id=modal]').data('remodal')];
    // inst.open();
    // inst.close();

    // Or init in this way:
    var inst = $('[data-remodal-id=modal2]').remodal();
    // inst.open();
</script>

<script src="../bootstrap/js/jquery.remodal.js"></script>
<script type="text/javascript" src="../bootstrap/js/bootstrap.min.js"></script>
</body>
</html>