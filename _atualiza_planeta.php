<?php

include 'conexao.php';

$id       = $_POST['id'];
$nome     = $_POST['nome'];
$clima    = $_POST['clima'];
$terreno  = $_POST['terreno'];
$qntfilme = $_POST['qntfilme'];


$sql = "UPDATE `planeta` SET `nome`='$nome',`clima`='$clima',`terreno`='$terreno',`qntfilme`='$qntfilme' WHERE id_planeta = $id";
    
$atualizar = mysqli_query($conexao, $sql);

?>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">	
<div class="container" style="width:400px">
    <center>
        <h3>Atualizado com Sucesso</h3>
        <a href="listar_planetas.php" class="btn btn-sn btn-warning" style="color:#fff">Voltar</a>
    
    </center>

</div>