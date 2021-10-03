<?php
include_once "./conexao.php";

$nome = $_POST["nome"];
$email = $_POST["email"];
$senha = $_POST["senha"];
$senha2 = $_POST["confirmar_senha"];

if($senha != $senha2){
	sleep(3);
	header("refresh:0;url=../cadastro.php");
	die();
}

$senhaHash = sha1($senha);

$sql = "INSERT INTO usuario(nome, email, senha) VALUES ('".$nome."', '".$email."', '".$senhaHash."')";

if(mysqli_query($conexao, $sql)){
	header("refresh:0;url=../index.php");
	die();
}else{
	sleep(3);
	header("refresh:0;url=../cadastro.php");
	die();
}
?>