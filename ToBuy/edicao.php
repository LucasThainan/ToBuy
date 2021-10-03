<?php
session_start();

if(!isset ($_SESSION['email']) == true){
    header('location:index.php');
}else{
    include_once 'php/conexao.php';

    $id_user = $_SESSION["id"];
    $cod = (isset($_GET["id"])) ? $_GET["id"] : "";
    $user_name = $_SESSION["nome"];

    $sql = "SELECT * FROM produto where codigo = $cod";
    $result = mysqli_query($conexao, $sql);

    $tbl = mysqli_fetch_assoc($result);
    $nome = $tbl["nome"];
    $valor = $tbl["valor"];
    $descricao = $tbl["descricao"];
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/edicao-produto.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/6cb04a2327.js" crossorigin="anonymous"></script>
    <script src="js/edicao.js" defer></script>
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
        <h2>Edite seu produto</h2>
        <div class="border"></div>
        
        <div class="edicao">
            <form action="php/editar_produto.php?id=<?php echo $cod; ?>" enctype="multipart/form-data" method="post">
                <?php echo '<img class="imagem-produto" src="images/users/' . $cod . '.png" alt="'. $nome .'">'; ?>
                <label for="nome-produto">Nome do produto</label>
                <input type="text" name="nome-produto" id="nome-produto" value="<?= $nome?>" required>
                <label for="">Valor</label>
                <input type="text" name="valor" id="valor" value="<?= $valor?>" required>
                <label for="descricao">Descrição do produto</label>
                <textarea name="descricao" id="descricao" required><?= $descricao?></textarea>
                <input type="submit" id="edicao" value="Enviar">
            </form>
        </div>

        <div class="editado">
            <p>Produto editado!</p>
        </div>
            
    </main>

</body>
</html>