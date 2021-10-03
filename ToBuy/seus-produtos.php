<?php
session_start();

if(!isset ($_SESSION['email']) == true){
    header('location:index.php');
}else{
    $id_user = $_SESSION["id"];
    $user_name = $_SESSION["nome"];
    include_once 'php/conexao.php';

    $sql = "SELECT * FROM produto where id_user = $id_user";
    $result = mysqli_query($conexao, $sql);
}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/seus-produtos.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/6cb04a2327.js" crossorigin="anonymous"></script>
    <script src="js/script.js" defer></script>
    <title>ToBuy</title>
</head>
<body>
    
    <aside class="nav-bar">
        <img src="images/logomarca.png" alt="Logomarcar">
        <nav class="menu-bar">
            <h4 class="nome-usuario">Bem vindo <?php echo $user_name?></h4>
            <a href="page-usuario.php"><i class="fas fa-home"></i>Home</a>
            <a href="cadastro-produto.php"><i class="fas fa-plus-square"></i>Cadastrar produto</a>
            <a href="seus-produtos.php"><i class="fas fa-edit"></i>Seus produtos</a>
            <a href="php/sair.php"><i class="fas fa-sign-out-alt"></i>Sair</a>
        </nav>

        <div class="redes-sociais">
            <a href="#"><i class="fab fa-facebook-square"></i></a>
            <a href="#"><i class="fab fa-instagram-square"></i></a>
            <a href="#"><i class="fab fa-twitter-square"></i></a>
        </div>
    </aside>

    <main class="main">
        <h2>Seus produtos</h2>
        <div class="border"></div>
        <div class="produtos-wrapper">
            <?php
            while($tbl = mysqli_fetch_array($result)){
                $cod = $tbl["codigo"];
                $nome = $tbl["nome"];
                $valor = $tbl["valor"];
                $descricao = $tbl["descricao"];
            ?>
            <div class="itens">
                <?php echo '<img src="images/users/' . $cod . '.png" alt="Placa de video">'; ?>
                <strong><?= $nome?></strong>
                <span>R$ <?= $valor?></span>
                <a class="btn" href="edicao.php?id=<?php echo $cod?>">editar<i class="fas fa-pencil-alt"></i></a>
                <a class="btn" href="php/excluir_produto.php?id=<?php echo $cod?>">excluir<i class="fas fa-trash-alt"></i></a>
            </div>
            <?php } ?>
        </div>
    </main>

</body>
</html>