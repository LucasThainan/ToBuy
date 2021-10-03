<?php
session_start();

include_once "conexao.php";

$email = $_POST["email"];
$senha = $_POST["senha"];
$senhaHash = sha1($senha);

$sql = "SELECT * FROM usuario WHERE email = '".$email."'";
$resultado = mysqli_query($conexao, $sql) or die("Erro no banco de dados!");
$total = mysqli_num_rows($resultado);

if($total){
    $dados = mysqli_fetch_array($resultado);

    if($senhaHash == $dados["senha"]){
        $select = mysqli_query($conexao, "SELECT codigo, nome FROM usuario WHERE email = '".$email."'") or die("id não localizado!");
        $row = mysqli_fetch_row($select);
        $id = $row[0];
        $nome = $row[1];

        $_SESSION["id"]=$id;
        $_SESSION["nome"]=$nome;
        $_SESSION["email"]=$email;

        header("refresh:0;url=../page-usuario.php");
        die();
    }else{
        sleep(3);
        header("refresh:0;url=../login.php");
        die();
    }
}else{
    sleep(3);
    header("refresh:0;url=../login.php");
    die();
}
?>