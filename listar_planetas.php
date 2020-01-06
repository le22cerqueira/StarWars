<!DOCTYPE html>
<html>
<head>
	<title>Listagem de Planetas</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<script src="https://kit.fontawesome.com/7b04e73c30.js"></script> 

</head>
<body>

<div class="container" style="margin-top: 40px"> 
    
    <div style="text-align: right">
        
        <a href="menu.php" type="button" class="btn btn-sm btn-primary">Voltar</a>
    
    </div>
    
	<h3>Listagem de Planetas</h3>
	<br>
	<table class="table">
  <thead>
    <tr>
      <th scope="col">Nome Planeta</th>
      <th scope="col">Clima do Planeta</th>
      <th scope="col">Terreno</th>
      <th scope="col">Quantos Filmes Apareceu</th>
    </tr>
  </thead>  
    
    	<?php

    		include 'conexao.php'; 

    		$sql = "SELECT * FROM `planeta`";
    		$busca = mysqli_query($conexao,$sql);
    		
    		while ($array = mysqli_fetch_array($busca)){

          $id_planeta = $array['id_planeta'];
    			$nome       = $array['nome'];
    			$clima      = $array['clima'];
    			$terreno    = $array['terreno'];
    			$qntfilme   = $array['qntfilme'];	
		?>
	<tr>
      <td><?php echo $nome ?></td>
      <td><?php echo $clima ?></td>
      <td><?php echo $terreno ?></td>
      <td><?php echo $qntfilme ?></td>
      <td><a class="btn btn-warning btn-sm" style="color:#fff" href="editar_planeta.php?id=<?php echo $id_planeta  ?> " role="button"><i class="far fa-edit"></i>&nbsp;Editar</a></td> 
        
        <td><a class="btn btn-danger btn-sm" style="color:#fff" href="deletar_planeta.php?id=<?php echo $id_planeta  ?> " role="button"><i class="far fa-trash-alt"></i>&nbsp;Excluir</a></td>

  <?php } ?> 
    </tr>
  
</table>   
  
</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


</body>
</html>