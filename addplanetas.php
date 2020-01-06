<!DOCTYPE html>
<html>
<head>
	<!-- caso precise usar o bootstrap e javascript local seus arquivos estarão na pasta htdocs que foram baixados do site do bootstrap. São eles: <link rel="stylesheet" href="css/bootstrap.css"> e 
	<script type="text/javascript" src="js/bootstrap.js"></script -->
	<meta charset="utf-8">	
	<title>Formulário de Cadastro</title>
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
        
        <div style="text-align: right;">
                  <a href="menu.php" type="button" class="btn btn-sm btn-primary">Voltar</a>
  				                
  			</div>
		<h4>Cadastro de Planetas</h4>
		<form action="_inserir_planeta.php" method="post" style="margin-top: 20px" > 
  		<div class="form-group">
    			<label>Nome do Planeta</label>
    			<input type="text" class="form-control" name="nome" placeholder="Insira o nome do Planeta" required>
    	</div>
			

    	<div class="form-group">
    			<label>Clima</label>
    			<select class="form-control" name="clima">
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
          <input type="text" class="form-control" name="terreno" placeholder="Insira o Terreno" autocomplete="off" required>
      </div>


    		<div class="form-group">
    			<label>Quantidade de Aparições em Filmes</label>
    			<input type="number" class="form-control" name="qntfilme" placeholder="Insira em quantos filmes apareceu" autocomplete="off" required>
    		</div> 


  			<div style="text-align: right;">
                 
  				  <button type="submit" class="btn btn-sm btn-success">Cadastrar</button>
              
  			</div>

    	</form>		
    
	</div>
  
 </body> 

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>