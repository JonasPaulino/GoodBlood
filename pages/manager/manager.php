<?php
        session_start();
        include_once("../../model/conexao.php");

        $nome = $_SESSION['nome'];

        if ((!isset($_SESSION['nome']))) {
            $logou = 'tentouDireto';
            $_SESSION['logou'] = $logou;
            header("location: ../../pages/manager/login.php");

        };
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
   
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="manager.css" >
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <title> Consulta dados </title>
</head>
<body>
    <div class="container">
        <div class="containerBase">
            <div class="menu">
                <div class="logo">
                    <img src="../../assets/img/logo_red.png" alt="">
                </div>
                <div class="links">
                    <div class="perfil">
                        <i class="fa fa-user-circle"></i> <?php echo $nome ?>
                    </div>
                    <div class="btn-box">
                        <a id="btnSair" href="#">
                            <i class="fa fa-sign-out"></i>
                        </a> 
                    </div>
                </div>
            </div>
            <div>
            <div class="pesquisa">
                <div class="pesquisaTitulo">
                    <h2> APTIDÃO PARA DOAÇÃO </h2>
                </div>
                <div class="pesquisaInput">
                    <input placeholder="Nome ou Cidade" type="text">
                    <div class="btn-box">
                        <button name="SendPesqPessoa" type="submit"><i class="fa fa-search"></i> Pesquisar</button>
                    </div>
                </div>
            </div>
            <div class="containerTabela">
                <?php
                    $result_dados = "SELECT * FROM aptidao";
                    $resultado_dados = mysqli_query($conn, $result_dados);
                    $tabela = '<table border="1">';
                ?>  
                
                
                <table id="tabela" border="1">
                    <thead>
                        <tr>
                            <th> ID </th>
                            <th>NOME</th>
                            <th>CELULAR</th>
                            <th>CIDADE</th>
                            <th>DATA</th>
                            <th>APTO</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php

                        while($row_usuario = mysqli_fetch_assoc($resultado_dados) ){
                    
                            $id = $row_usuario['id']. "<br>"; 
                            $nome= $row_usuario['nome_completo']. "<br>";
                            $celular= $row_usuario['celular']. "<br>";
                            $cidade= $row_usuario['cidade']. "<br>";
                            $data= $row_usuario['data']. "<br>";
                            $apto= $row_usuario['apto']. "<br>";
                        ?>  
                        <tr>
                            <td><?php echo $id ?></td>
                            <td><?php echo $nome ?></td>
                            <td><?php echo $celular ?></td>
                            <td><?php echo $cidade ?></td>
                            <td><?php echo $data ?></td>
                            <td><?php echo $apto ?></td>
                        </tr> <br>
                        <?php
                        }
                        ?>

                    </tbody>
                </table>                
            </div> 
            <div class="footer">
                <p>Copyright © 2022 GoodBlood</p>
                <p>Powered by GoodBlood</p>
            </div>
        </div>
    </div> 
    </body>

    <script src="./manager.js"></script>
</html>