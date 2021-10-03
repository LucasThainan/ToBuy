<?php
session_start();

include_once 'conexao.php';

$id_user = $_SESSION["id"];
$cod = (isset($_GET["id"])) ? $_GET["id"] : "";

$sql = "DELETE FROM produto WHERE codigo = $cod";

unlink("../images/users/$cod.png");

if (!mysqli_query($conexao, $sql)) {
    echo "<script>alert('Erro ao comprar produto!');location.href=\"../page-usuario.php\";</script>";
    die();
}

sleep(2);
header("refresh:0;url=../page-usuario.php");
die();

?>