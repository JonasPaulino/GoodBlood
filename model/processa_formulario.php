<?php
    session_start();
    include_once('conexao.php');

    if(isset($_POST['submit'])){
  
        $nome         = $_POST['nome'];
        $celular      = $_POST['celular'];
        $cidade       = $_POST['cidade'];
        $aptidao      = $_POST['aptidao'];

        $query = "INSERT INTO aptidao (nome_completo,celular,cidade,data,apto) 
				VALUES ( '$nome', '$celular', '$cidade', NOW(),'$aptidao')";

        $result = mysqli_query($conn, $query);

   

         if(mysqli_affected_rows($conn)>0){
             $_SESSION['msgSalvar'] = 'ADD';
         } else {
             $_SESSION['msgSalvar'] = 'Não';
         }
         
         if($aptidao == "SIM"){

             header("location: ../pages/sucess/index.php?doador=$nome");
         }else{
             header("location: ../pages/form/index.php?apto=$aptidao"); 
         };
    };

?>