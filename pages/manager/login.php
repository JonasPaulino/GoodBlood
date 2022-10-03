<?php
  session_start();
  if(isset($_SESSION['logou'])){
    $logou = $_SESSION['logou'];

    if($logou == 'NAO'){
       $logou = '';
       $_SESSION['logou'] = $logou;

      echo "<script> window.onload = function() {
        swal('Atenção!', 'Usuário ou senha inválidos.', 'error');    
      }; </script>";
    }

    if($logou == 'tentouDireto'){
      $logou = '';
      $_SESSION['logou'] = $logou;

      echo "<script> window.onload = function() {
        swal('Atenção!', 'Para acessar a tela de gerenciamento é preciso antes realizar login.', 'info');    
      }; </script>";
    }
  }
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="login.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@7.12.15/dist/sweetalert2.all.min.js"></script>
  <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/sweetalert2@7.12.15/dist/sweetalert2.min.css'>
  </link>

  <title>Doar</title>
</head>

<body>
  <div class="container">
    <div class="containerBase">

      <div class="menu">
        <div class="logo">
        <a href="../../index.html">
          <img src="../../assets/img/logo_red.png" alt=""></a>
        </div>
        <div class="links">
          <a href="../../index.html">Inicio</a>
        </div>
      </div>

      <div class="containerMeio">
        <div class="containerForm">
          <img src="../../assets/img/logo_red.png" alt="">
          <h2>Entre com seus dados</h2>
          <form action="../../model/processa_login.php" method="POST">
          <div class="input-field">
                <input type="text" id="nome" name="nome" placeholder="alguma coisa" required>
                <label for="nome">Nome:</label>
            </div>

            <div class="input-field">
                <input type="password" name="senha" id="senha" placeholder="alguma coisa" required>
                <label for="senha">Senha:</label>
            </div>

            <div class="btn-box">
                <button type="submit" name="submit" ><i class="fa fa-hospital-o"></i>Entrar</button>
            </div>
          </form>
        </div>
      </div>
      <div class="footer">
        <p>Copyright © 2022 GoodBlood</p>
        <p>Powered by GoodBlood</p>
      </div>
    </div>
  </div>
  <script src="./scritp.js"></script>
</body>

</html>