<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/6cb04a2327.js" crossorigin="anonymous"></script>
    <script src="js/script.js" defer></script>
    <title>ToBuy</title>
</head>
<body>
    <header class="page-header">
        <a href="index.php"><img src="images/logomarca.png" alt="Logomarca"></a>
        <nav class="menu">
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#produtos">Produtos</a></li>
                <li><a href="#sobre">Sobre</a></li>
                <li><a href="#contato">Contato</a></li>
            </ul>

            <a href="login.php"><button class="btn" id="btn-login">entrar</button></a>
            <a href="cadastro.php"><button class="btn" id="btn-cadastro">cadastre-se</button></a>
        </nav>
    </header>

    <main class="main" id="home">
        <img src="images/main.jpg" alt="Imagem principal">
        <h2>O que você precisar,<br/>ao alcance de um click</h2>
        <span>É tempo de comprar!!</span>
    </main>

    <div class="produtos" id="produtos">
        <h2>Produtos recomendados</h2>
        <div class="border"></div>
        <div class="produtos-wrapper">
            <div class="itens item1">
                <img src="images/processador.jpg" alt="Processador">
                <strong>Processador i5 9400F</strong>
                <span>R$ 1800,00</span>
            </div>
            <div class="itens item2">
                <img src="images/gabinete.jpg" alt="Processador">
                <strong>Gabinete gamer pichau KAZAN</strong>
                <span>R$ 1200,00</span>
            </div>
            <div class="itens item3">
                <img src="images/placaDeVideo.jpg" alt="Processador">
                <strong>Placa de vídeo RTX 3080TI</strong>
                <span>R$ 8540,00</span>
            </div>
        </div>
    </div>

    <div class="sobre" id="sobre">
        <h2>Sobre nós</h2>
        <div class="border"></div>
        <p>ToBuy é uma plataforma de compra e venda online, onde qualquer pessoa pode anunciar seus produtos<br/> 
        de forma totalmente gratuita.Basta fazer o seu cadastro e você já vai poder aproveitar de todos os nossos serviços.<br/>
        Não perca tempo! Anuncie!!
        </p>
    </div>

    <footer id="contato">
        <p>©Todos os direitos reservados.</p>
        <p>Tobuy Since - 2020</p>
        <p>tobuy@gmail.com</p>
        <div class="redes-sociais">
            <a href="#"><i class="fab fa-facebook-square"></i></a>
            <a href="#"><i class="fab fa-instagram-square"></i></a>
            <a href="#"><i class="fab fa-twitter-square"></i></a>
        </div>
    </footer>
    
</body>
</html>