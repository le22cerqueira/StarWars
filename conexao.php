<?php
$servername = "localhost"; //servidor (local)
$database = "starwars"; //nome do banco, pode alterar
$username = "root"; // usuário padrão
$password = ""; // senha de conexão do banco de dados.

// Create connection
$conexao = mysqli_connect($servername, $username, $password, $database);
?>