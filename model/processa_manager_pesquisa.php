<?php
  session_start();
  include_once("./conexao.php");

$SendPesqUser = filter_input(INPUT_POST, 'SendPesqUser', FILTER_SANITIZE_STRING);
if($SendPesqUser){
  $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
  $query = "SELECT * FROM aptidao WHERE nome_completo LIKE '%$nome%'";
  $result_query = mysqli_query($conn, $query);
  while($row_pessoa = mysqli_fetch_assoc($result_query)){
    echo "ID: " . $row_pessoa['id'] . "<br>";
    echo "Nome: " . $row_pessoa['nome'] . "<br>";
  }
}