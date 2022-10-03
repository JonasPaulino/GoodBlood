<?php
require ('./conexao.php');

 if(empty($_POST['nome']) || empty($_POST['senha'])) {
     $_SESSION['logou'] = 'INFO';
      header('Location: ../pages/manager/login.php');
      exit();
 } 

 $usuario = $_POST['nome'];
 $senha = md5($_POST['senha']);
 $query = "SELECT id, nome, senha FROM usuario WHERE nome = '$usuario' AND senha = '$senha'";
 $result = mysqli_query($conn, $query);
 $row = mysqli_num_rows($result);

 $logou  = 'NAO';

if($row > 0){
  session_start();

  $logou = 'SIM';

  $_SESSION['nome'] = $usuario;
  $_SESSION['logou'] = $logou;
  header("location: ../pages/manager/manager.php");
  exit();
}else{
  session_start();
  
    $_SESSION['logou'] = $logou;
    header("location: ../pages/manager/login.php");
    exit();
}

?>