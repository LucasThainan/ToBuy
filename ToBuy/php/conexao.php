<?php
$SERVIDOR = "localhost";
$USUARIO = "root";
$SENHA = "";
$BANCO = "tobuy";

$conexao = mysqli_connect($SERVIDOR, $USUARIO, $SENHA);
if (!$conexao){
  die("Erro ao conectar o banco " . mysqli_error($conexao));
}

$select = mysqli_select_db($conexao, $BANCO);
if (!$select){
	echo "Erro ao selecionar o esquema. " . mysqli_error($conexao);
}
?>