<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login.css">
    <title>Login</title>
</head>
<body>
    <div class="menu">
        <div class="logo">
          <img src="../../assets/img/logo_red.png" alt="">
        </div>
        <div class="links">
            <a href="../../index.html">Inicio</a>
        </div>
    </div>

    <div class="container">
        <h2>Login</h2>
        <form action="../../model/processa_login.php" method="post">
            <div class="input-field">
                <input type="text" id="nome" name="nome" placeholder="alguma coisa">
                <label for="nome">Nome:</label>
            </div>

            <div class="input-field">
                <input type="password" name="senha" id="senha" placeholder="alguma coisa">
                <label for="senha">Senha:</label>
            </div>

            <div class="center">
                <button type="submit" name="submit" >Entrar</button>
            </div>
        </form>
        <div class="links-uteis">
            <a href=""><p>Esqueceu a sua senha ?</p></a>
            <a href=""><p>Ainda não sou cadastrado</p></a>
        </div>
    </div>
    <div class="footer">
            <p>Copyright © 2022 GoodBlood</p>
            <p>Powered by GoodBlood</p>
      </div>
</body>
</html>