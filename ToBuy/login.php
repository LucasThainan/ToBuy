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
    <div class="login-logo">
        <a href="index.php"><img src="images/logomarca.png" alt="Logomarca"></a>
    </div>
    <div class="login-form">
        <a href="index.php"><i class="fas fa-arrow-left"></i></a>
        <div class="wrapper">
            <h2>Faça o seu login</h2>
            

            <div class="social-medias">
                <i class="fab fa-facebook-square"></i>
                <i class="fab fa-google-plus-square"></i>
                <i class="fab fa-linkedin"></i>
            </div>
        
            <form action="php/verificar_login.php" method="post">
                <input type="email" name="email" placeholder="Digite seu e-mail*" required>
                <input type="password" name="senha" placeholder="Digite sua senha*" required>
                <a href="cadastro.php">Crie uma conta</a>
                <input type="submit" name="enviar" id="login" value="entrar">
            </form> 

        </div>

        <div class="mensagem-error">
            <span>Opa! Parece que seus dados estão incorretos.</span>
        </div>
    </div>


</body>
</html>