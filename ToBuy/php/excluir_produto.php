<?php
session_start();

include_once 'conexao.php';

$id_user = $_SESSION["id"];
$cod = (isset($_GET["id"])) ? $_GET["id"] : "";

$sql = "DELETE FROM produto WHERE codigo = $cod";

unlink("../images/users/$cod.png");

if (!mysqli_query($conexao, $sql)) {
    echo "<script>alert('erro ao deletar produto!');location.href=\"../seus-produtos.php\";</script>";
    die();
}

header("refresh:0;url=../seus-produtos.php");
die();

?>