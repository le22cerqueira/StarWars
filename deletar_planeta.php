<?php
include 'conexao.php';
$id = $_GET['id'];

$sql = "DELETE FROM `planeta` WHERE id_planeta = $id";
$deletar = mysqli_query($conexao,$sql)

?>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">	
<div class="container" style="width:400px">
    <center>
        <h3>Deletado com Sucesso</h3>
        <a href="listar_planetas.php" class="btn btn-sn btn-warning" style="color:#fff">Voltar</a>
    
    </center>

</div>