<?php
session_start();

include_once 'conexao.php';

$id_user = $_SESSION["id"];
$cod = (isset($_GET["id"])) ? $_GET["id"] : "";
$nome_produto = $_POST["nome-produto"];
$valor = $_POST["valor"];
$descricao = $_POST["descricao"];

$sql = "UPDATE produto SET nome = '".$nome_produto."', valor = '".$valor."', descricao = '".$descricao."' WHERE codigo = $cod";

if (!mysqli_query($conexao, $sql)) {
    echo "<script>alert('Erro ao editar produto!');location.href=\"../seus-produtos.php\";</script>";
    die();
}

sleep(3);
header("refresh:0;url=../seus-produtos.php");
die();

?>