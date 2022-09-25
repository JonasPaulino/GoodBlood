<?php
  session_start();
  $doador = $_GET['doador'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="./script.js"></script>
  <title>Sucesso</title>
</head>

<body>
  <div class="container">
    <div class="containerApto">
      <img src="../../assets/img/logo_red.png" alt="">
      <div class="texto">
        <h1>Você está apto!</h1>

        <p> <b><?php echo($doador) ?></b>, sua validação foi positiva, isso significa que você pode doar! Mas não se preocupe uma de nossas unidade entrará em contato com você.</p>
        <a href="../../index.html"> <i class="fa fa-check"></i> Finalizar</a>
      </div>
    </div>
  </div>
</body>

</html>