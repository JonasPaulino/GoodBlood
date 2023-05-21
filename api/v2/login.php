<?php
// Arquivo login.php

require_once 'conexao.php';

// Obter as credenciais do formulário
$username = $_POST['username'];
$password = $_POST['password'];

// Consulta SQL para buscar o usuário no banco de dados
$sql = "SELECT * FROM usuario WHERE nome = '$username' AND senha = '$password'";
$result = $conn->query($sql);

// Verifica se a consulta retornou algum resultado
if ($result->num_rows > 0) {
    // Login bem-sucedido, usuário encontrado no banco de dados
    $response = array('success' => true);
} else {
    // Login falhou, usuário não encontrado no banco de dados
    $response = array('success' => false);
}

// Retornar a resposta em formato JSON
header('Content-type: application/json');
echo json_encode($response);

// Fecha a conexão com o banco de dados
$conn->close();
?>
