<?php
        session_start();
        include_once("../../model/conexao.php");
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
   
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="manager.css" >
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
                    <a href="http://">Inicio</a>
                </div>
            </div>
            <div class="tabela">
                <div class="pesquisa">
                    <h1> APTIDÃO PARA DOAÇÃO </h1>
                </div>
                <?php
                    $result_dados = "SELECT * FROM aptidao";
                    $resultado_dados = mysqli_query($conn, $result_dados);
                    $tabela = '<table border="1">';
                ?>  
                
                
                <table border="1">
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
</html>