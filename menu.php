<!DOCTYPE html>
<html>
<head>
    
    <title>Menu</title>
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css">
    
    </head>
    
<body>
    
    <div class="container" style="margin-top: 100px" >
    
    <div class="row"> <!-- Class Row deixa lado a lado -->

  <div class="col-sm-6" style="margin-top: 20px">
    <div class="card" id="1">
      <div class="card-body">
        <h5 class="card-title">Adicionar Planetas</h5>
        <p class="card-text">Opção para adicionar Planetas no Banco de Dados</p>
        <a href="addplanetas.php" class="btn btn-primary">Cadastrar Planetas</a>
      </div>
    </div>
  </div>

  <div class="col-sm-6" style="margin-top: 100px">
    <div class="card" id="2">
      <div class="card-body">
        <h5 class="card-title">Lista de Planetas</h5>
        <p class="card-text">Visualizar, Editar e Excluir Planetas</p>
        <a href="listar_planetas.php" class="btn btn-primary">Planetas</a>
      </div>
    </div>
  </div>

<div class="col-sm-6" style="padding-bottom: 20px">
    <div class="card" id="3">
      <div class="card-body">
        <h5 class="card-title">Adicionar Clima</h5>
        <p class="card-text">Opção para adicionar um Clima</p>
        <a href="addclima.php" class="btn btn-primary">Cadastrar Clima</a>
      </div>
    </div>
  </div>
  
</div> 
<a href="index.php" type="button" class="btn btn-sm btn-primary">Sair</a> 
</div>    
</div>
    
    
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>    
</body>    
    
</html>