<?php
include ('conexao.php');

if(empty($_POST['nome']) || empty($_POST['senha'])) {
     header('Location: ../pages/manager/login.php');
     exit();
} 

$usuario = $_POST['nome'];
$senha = md5($_POST['senha']);
$query = "SELECT id, nome, senha FROM usuario WHERE nome = '$usuario' AND senha = '$senha'";
$result = mysqli_query($conn, $query);
$row = mysqli_num_rows($result);

if($row > 0){
     $_SESSION['nome'] = $usuario;
    header('Location: ../pages/manager/manager.php');
     exit();
 }else{
     $_SESSION['nao autenticado'] = true;
     header('Location: ../pages/manager/login.php');
     exit();
 }

?>