<?php
//incluindo arqquivo de conexao ao banco de dados
 include ("conexao.php");

//condição de realizar o login 
// com função isset verifica variavél se definida retornando o valor boleano 

 if(isset($_POST['matricula']) && isset($_POST['senha'])){
    //session permeia todas as paginas diferente de variavél local  
    if(!isset($_SESSION))
        session_start();
       
     $_SESSION['matricula'] = $conexao->escape_string($_POST['matricula']);
     $_SESSION['senha'] = ($_POST['senha']);
     
    //conexao com banco de dados
    // com contador   $quantidade = $sql_query->num_rows; de informação do banco
    $sql_code = "SELECT * FROM usuario WHERE matricula = '$_SESSION[matricula]' "; 
    $sql_query = $conexao->query($sql_code) or die ($conexao->error);
    $registro = $sql_query->fetch_assoc();
    $quantidade = $sql_query->num_rows;
    //validação de dados 
    /*if($quantidade == 0){

        echo ($erro[] = "DADO NÃO REGISTRADO");

    }else{
        if($registro['senha'] == $_SESSION['senha'] ) {
            //verifica login 
            $_SESSION['id'] = $registro['id'];
        
        }else{
           echo ( $erro[] ="Senha incorreta") ;
        }
    }
    //redirecionamento de usuarios para pagina de acesso ao material
    if(count($erro) == 0 || !isset($erro)){

        header("location:documentopdf.html"); 
    } */   
 }

?>

<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Pagina inicial </title>
        <link rel="stylesheet" type="text/css" href="./CSS/inicial.css">     
    </head>
    <body>
        
        <!--?php
        //tratamento de erro
            if(count($erro) > 0)
               foreach($erro as $msg){
                echo"<p> $msg </p>";
            }
        ?-->
        <header id ="formatacao"> 
            <nav id="menu">                
                <ul type="disc">      
                    <li> <a href="https://sempreuninassau-my.sharepoint.com/:x:/g/personal/01429654_sempreuninassau_com_br/EYmiBQDmCdJHqhnh-O8C07ABqOyWnJRdc-NdSv2KjToAKw"> Base Curricular  </a> </li>   
                    <li> <a href="sobre.html"> Sobre Nós </a> </li>   
                </ul>
            </nav>
        </header>
            <main> <!-- Corpo do site -->
                <img src= "img/logo.png"><br>
            
                <p><div class="social-media"></p> <!-- Inlusão de imagens -->
                    <a href="#">
                        <img src="img/Facebook.png" alt="Facebook">
                    </a>
                    <a href="#">
                        <img src="img/twitter.jpeg" alt="Twitter">
                    </a>
                    <a href="#">
                        <img src="img/insta.png" class="Instagram">
                    </a>
                
            
                </div><br>
            
                <div class="alternative">
                    <span></span>
                </div>
                
                <p><h2> Consultar Material Didático</h2></p><br><br>
               <?php
                 if($quantidade == 0){

                    echo ($erro[] = "DADO NÃO REGISTRADO");
            
                }else{
                    if($registro['senha'] == $_SESSION['senha'] ) {
                        //verifica login 
                        $_SESSION['id'] = $registro['id'];
                    
                    }else{
                       echo ( $erro[] ="Senha incorreta") ;
                    }
                }
               ?>
                <div>
                    <form action ="" method="POST"> <!-- Criação de campos para preenchimento -->
                        
                        <label for="Matrícula">
                            <span><b>Matrícula</b></span>
                            <input type="Matrícula" name="matricula" method="POST">
                        </label>
                        <label for="Senha">
                            <span><b>Senha</b></span>
                            <input type="password" name="senha" required method="POST">
                        </label><br>

                        <input type="submit" value="login"> <br><br><br> <!-- Criação de tecla de redirecionamento-->
                        
                    
                    </form>

                </div>
                </nav>
            </main>
            <section class="images"> <!-- Adção de imagem da logo do projeto -->
                <img src="img/estudo.jpg" alt ="escola">
                <div class="circle"></div>
            </section>
        <footer >
            <div class="rodape" >
                <p > Participe do nosso time </p>
                <p > Contatato (81) 4002-8922 </p> 
            </div>
        </footer>       
    </body>
</html>