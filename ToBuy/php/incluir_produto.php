<?php
session_start();

include_once "./conexao.php";

$id_user = $_SESSION["id"];
$nome_produto = $_POST["nome-produto"];
$valor = $_POST["valor"];
$descricao = $_POST["descricao"];


if ( isset( $_FILES[ 'pic' ][ 'name' ] ) && $_FILES[ 'pic' ][ 'error' ] == 0 ) {
 
    $arquivo_tmp = $_FILES[ 'pic' ][ 'tmp_name' ];
    $nome = $_FILES[ 'pic' ][ 'name' ];
 
    $extensao = pathinfo ( $nome, PATHINFO_EXTENSION );
 
    $extensao = strtolower ( $extensao );
 
    if ( strstr ( '.jpg;.jpeg;.png', $extensao ) ) {
        $sql = "INSERT INTO produto(id_user, nome, valor, descricao) VALUES ('".$id_user."', '".$nome_produto."', '".$valor."', '".$descricao."')";

        if(mysqli_query($conexao, $sql)){
            $select = mysqli_query($conexao, "SELECT codigo FROM produto WHERE id_user = '".$id_user."' and nome = '".$nome_produto."' and valor = '".$valor."' and descricao = '".$descricao."'") or die("id não localizado!");
            $row = mysqli_fetch_row($select);

            $novoNome = $row[0] . '.png';
            $destino = '../images/users/' . $novoNome;
            @move_uploaded_file ($arquivo_tmp, $destino);

            sleep(3);
            header("refresh:0;url=../cadastro-produto.php");
            die();
        }else{
            echo "<script>alert('Erro ao enviar produto!');location.href=\"../cadastro-produto.php\";</script>";
            die();
        }

    }else{
        echo "<script>alert('arquivo com extensão inválida!');location.href=\"../cadastro-produto.php\";</script>";
        die();
    }
}
?>