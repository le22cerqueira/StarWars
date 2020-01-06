<?php

include 'conexao.php';

$nome      = $_POST['nome'];
$clima     = $_POST['clima'];
$terreno   = $_POST['terreno'];
$qntfilme  = $_POST['qntfilme'];


$sql = "INSERT INTO `planeta`( `nome` , `clima` , `terreno` , `qntfilme`) VALUES ('$nome' , '$clima' , '$terreno' , '$qntfilme')";

$inserir = mysqli_query($conexao, $sql);
?>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<center>
<div class="containe" style="width: 500px; margin-top: 20px">
</center>
	
<center>
	<h4>Planeta adicionado com sucesso!</h4>
	<div style="padding-top: 20px">
</center>


<center>
	<a href="addplanetas.php" role="button" class="btn btn-sm btn-primary">Cadastrar novo Planeta</a>
</center>
	</div>
</div>	
