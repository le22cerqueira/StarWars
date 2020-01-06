<?php

include 'conexao.php';
$tipo = $_POST['tipo'];

$sql = "INSERT INTO `clima` (`tipo`) VALUES ('$tipo')";

$inserir = mysqli_query($conexao, $sql);
?>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<center>
<div class="containe" style="width: 500px; margin-top: 20px">
</center>
	
<center>
	<h4>Produto adicionado com sucesso!</h4>
	<div style="padding-top: 20px">
</center>


<center>
	<a href="addclima.php" role="button" class="btn btn-sm btn-primary">Cadastrar novo Clima</a>
</center>
	</div>
</div>	
