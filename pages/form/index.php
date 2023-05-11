<?php
  session_start();
  if(!empty($_GET['apto'])){
    $apto = $_GET['apto'];

    if ($apto == "NAO"){
      echo "<script> window.onload = function() {
        swal('Atenção!', 'Infelizmente você não pode doar neste momento, tente novamente em outro dia.', 'info');    
      }; </script>";
    }
  };
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" type="image/x-icon" href="../../assets/img/favicon.ico">
  <link rel="stylesheet" href="style.css">
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
          <a href="../../index.html"><img src="../../assets/img/logo_red.png" alt=""></a>
        </div>
        <div class="links">
          <a href="../../index.html">Inicio</a>
          <a id="btLogin" href="../manager/login.php"><i class="fa fa-hospital-o"></i>login</a>
        </div>
      </div>

      <div class="containerMeio">
        <form action="../../model/processa_formulario.php" id="idforms" class="containerForm" method="POST"
          onsubmit="return validaSeEstaApito()">
        <!-- <form action="../../model/processa_formulario.php" id="idforms" class="containerForm" method="POST"> -->

          <div class="barra-etapas">
            <div class="" id="progresso"></div>
            <div class="etpa-coluna"><small>Etapa 1</small></div>
            <div class="etpa-coluna"><small>Etapa 2</small></div>
            <div class="etpa-coluna"><small>Etapa 3</small></div>
          </div>

          <div class="forms" id="etapa1">
            <h1>Sobre você</h1>
            <input type="text" name="nome" placeholder="Nome Completo" required>
            <input type="tel" name="celular" placeholder="(00) 0000-0000" maxlength="16" size="16" id="celular"
              required>
            <input type="text" name="cidade" placeholder="Cidade">

            <div class="btn-box">
              <button type="button" id="avanca1">
                <i class="fa fa-arrow-right"></i>Avançar
              </button>
            </div>
          </div>

          <div class="forms" id="etapa2">
            <div class="tituloEtapa">
              <p id="tituloEtapa2"></p>
              <h1>Sobre sua saúde</h1>
            </div>
            <div class="mensagemEtapa">
              <div class="pergunta">
                <p>Apresenta sintomas gripais?</p><br>
                <div class="resposta">
                  <label for="">Sim
                    <input type="radio" name="gripado" value="Sim">
                  </label>

                  <label for="">Não
                    <input type="radio" name="gripado" value="Não">
                  </label>
                </div>
              </div>

              <div class="pergunta">
                <p>Passou por alguma cirurgia recentemente?</p><br>
                <div class="resposta">
                  <label for="">Sim
                    <input type="radio" name="cirurgia" class="simNao" value="Sim">
                  </label>

                  <label for="">Não
                    <input type="radio" name="cirurgia" class="simNao" value="Não">
                  </label>
                </div>
              </div>

            </div>
            <div class="btn-box">
              <button type="button" id="volta1" class="voltar"> <i class="fa fa-arrow-left"></i> Voltar</button>
              <button type="button" id="avanca2"> <i class="fa fa-arrow-right"></i> Avançar</button>
            </div>
          </div>

          <div class="forms" id="etapa3">
            <div class="tituloEtapa">
              <p id="tituloEtapa3"></p>
              <h1>Sobre seu corpo</h1>
            </div>
            <div class="mensagemEtapa">
              <div class="pergunta">
                <p>Está de jejum?</p><br>
                <div class="resposta">
                  <label for="">Sim
                    <input type="radio" name="alimentou" value="Sim">
                  </label>

                  <label for="">Não
                    <input type="radio" name="alimentou" value="Não">
                  </label>
                </div>
              </div>

              <div class="pergunta">
                <p>Doou sangue nos últimos 3 meses</p><br>
                <div class="resposta">
                  <label for="">Sim
                    <input type="radio" name="doou" class="simNao" value="Sim">
                  </label>

                  <label for="">Não
                    <input type="radio" name="doou" class="simNao" value="Não">
                  </label>
                </div>
              </div>
            </div>

            <input type="hidden" id="aptidao" name="aptidao" value="Jonas">

            <div class="btn-box">
              <button type="button" id="volta2" class="voltar"> <i class="fa fa-arrow-left"></i> Voltar</button>
              <button type="submit" name="submit" id="finalizar"> <i class="fa fa-check"></i>
                Finalizar</button>
            </div>
          </div>

        </form>

        <div class="bannerLateral">
          <div class="title_p">
            <p>Bem vindo ao Good Blood</p>
          </div>
          <div class="titulo_h4">
            <h4>Descubra agora mesmo se você está apto a doar.</h4>
          </div>
          <div class="title_h1">
            <h1>
              Uma doação pode salvar vidas. Faça a diferença!
            </h1>
          </div>
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