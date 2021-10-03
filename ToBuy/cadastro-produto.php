<?php
session_start();

if(!isset ($_SESSION['email']) == true){
    header('location:index.php');
}

$user_name = $_SESSION["nome"];
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/cadastro-produto.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/6cb04a2327.js" crossorigin="anonymous"></script>
    <script src="js/cadastro-produto.js" defer></script>
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
        <h2>Cadastre seu produto</h2>
        <div class="border"></div>
        
        <div class="cadastro">
            <form action="php/incluir_produto.php" enctype="multipart/form-data" method="post">
                <label for="nome-produto">Nome do produto*</label>
                <input type="text" name="nome-produto" id="nome-produto" required>
                <label for="">Valor*</label>
                <input type="text" name="valor" id="valor" required>
                <label for="descricao">Descrição do produto*</label>
                <textarea name="descricao" id="descricao" required></textarea>
                <label for="selecao-arquivo" class="selecao-arquivo"><i class="fas fa-plus"></i>Selecione uma imagem</label>
                <input type="file" id="selecao-arquivo" name="pic" accept="image/png, image/jpg, image/jpeg" onChange="verifica()" required>
                <input type="submit" id="cadastrar-produto" value="Enviar">
            </form>
        </div>

        <div class="produto-cadastrado">
            <p>Produto cadastrado!</p>
        </div>
        
    </main>

</body>
</html>