<?php
$dbname='heroku_c5baaf19dbcfd2c';
$usuario='be4a84f91fb99e';
$password='e3a62a69';
$localhost='us-cdbr-east-02.cleardb.com';

//Passo 1 - Conecta ao servidor MySQL
if(!($id = mysqli_connect($localhost,$usuario,$password,$dbname))) {
  echo "<p align=\"center\"><big><strong>Não foi possível estabelecer uma conexão com o gerenciador MySQL. Favor Contactar o Administrador.
  </strong></big></p>";
  exit;
}

//Passo 2 - Seleciona o Banco de Dados
if(!($con=mysqli_select_db($id, $dbname))) {
  echo " <p align=\"center\"><big><strong>Não foi possível estabelecer uma conexão com o gerenciador MySQL. Favor Contactar o Administrador.
  </strong></big></p>";
  exit;
}

?>
