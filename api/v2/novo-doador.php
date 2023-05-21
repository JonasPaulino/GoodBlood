2<?php
require_once 'conexao.php';

// Verifica se a requisição é do tipo POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // Obtém os dados da requisição
  $nome_completo = $_POST['nome_completo'];
  $celular = $_POST['celular'];
  $cidade = $_POST['cidade'];
  $data = $_POST['data'];
  $apto = isset($_POST['apto']) ? 1 : 0; // Converte o checkbox em 0 ou 1

  // Insere os dados na tabela aptidao
  $sql = "INSERT INTO aptidao (nome_completo, celular, cidade, data, apto) VALUES (?, ?, ?, ?, ?)";
  $stmt = $conn->prepare($sql);
  $stmt->bind_param("ssssi", $nome_completo, $celular, $cidade, $data, $apto);
  
  if ($stmt->execute()) {
    http_response_code(201); // Created
    echo json_encode(array('message' => 'Dados salvos com sucesso.'));
  } else {
    http_response_code(500); // Internal Server Error
    echo json_encode(array('message' => 'Erro ao salvar os dados: ' . $stmt->error));
  }

  $stmt->close();
} else {
  http_response_code(405); // Method Not Allowed
  echo json_encode(array('message' => 'Método não permitido.'));
}

$conn->close();
?>
