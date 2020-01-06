<?php

include 'conexao.php';
    
$id = $_GET['id'];

?>

<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8">	
	<title>Formulário de Edição do Planeta</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">	

	<style type="text/css">

		#tamanhoContainer {
			width: 500px;
		}
		#botao{
			background-color: #FF1168;
			color: #ffffff;
		}
	</style>

</head>
<body>

	<div class="container" id="tamanhoContainer" style="margin-top: 40px">

          <div style="text-align: right">
          <a href="listar_planetas.php" type="button" class="btn btn-sm btn-primary">Voltar</a>
          </div>

		<h4>Atualizar Planeta</h4>
		<form action="_atualiza_planeta.php" method="post" style="margin-top: 20px" > 
            
            <?php
            
            $sql = "SELECT * FROM `planeta` WHERE id_planeta = $id";
            
            $busca = mysqli_query ($conexao,$sql);
            while ($array = mysqli_fetch_array($busca)){

          $id_planeta = $array['id_planeta'];      
          $nome       = $array['nome'];
          $clima      = $array['clima'];
          $terreno    = $array['terreno'];
          $qntfilme   = $array['qntfilme'];	
            
            ?>

      
  			<div class="form-group">
    			<label>Nome do Planeta</label>
    			<input type="text" class="form-control" name="nome" value = "<?php echo $nome ?>">
                <input type="text" class="form-control" name="id" value = "<?php echo $id ?>" style="display: none">
    		</div>


        <div class="form-group">
          <label>Clima</label>
          <select class="form-control" name="clima" value = "<?php echo $clima ?>" >
            
                    <?php
                    
              include 'conexao.php';
                    $sql = "SELECT * FROM clima order by tipo ASC";
                    $buscar = mysqli_query($conexao,$sql);
                    
                    while ($array = mysqli_fetch_array($buscar)){
                    
                    $id = $array['id'];
                    $tipo = $array['tipo'];
                    
                    ?>
                    
                    <option><?php echo $tipo ?></option>
                    
                <?php } ?>                   
                                     
          </select>
        </div>


			<div class="form-group">
    			<label>Terreno</label>
    			<input type="text" class="form-control" name="terreno" value = "<?php echo $terreno ?>" >
      </div>

      

      <div class="form-group">
          <label>Quantidade de Aparições em Filmes</label>
          <input type="text" class="form-control" name="qntfilme" value = "<?php echo $qntfilme ?>" >
      </div>


    	

  			<div style="text-align: right;">	
  				<button type="submit" id="botao" class="btn btn-sm">Atualizar</button>
  			</div>
            
            <?php } ?>

    	</form>		
    
	</div>
  
 </body> 


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>