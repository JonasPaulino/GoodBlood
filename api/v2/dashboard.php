<?php

require_once 'conexao.php';

// Consulta SQL para buscar todos os doadores
$sql = "SELECT * FROM aptidao";
$result = $conn->query($sql);

// Verifica se a consulta retornou algum resultado
if ($result->num_rows > 0) {
    $doadores = array();
    while ($row = $result->fetch_assoc()) {
        $apto = ($row['apto'] == 1) ? "Sim" : "Não";
        $doadores[] = array(
            'nome' => $row['nome_completo'],
            'celular' => $row['celular'],
            'cidade' => $row['cidade'],
            'data' => $row['data'],
            'apto' => $apto
        );
    }
    
    $response = array(
        'success' => true,
        'doadores' => $doadores
    );
} else {
    $response = array(
        'success' => false,
        'message' => 'Nenhum doador encontrado.'
    );
}

// Retornar a resposta em formato JSON
header('Content-type: application/json');
echo json_encode($response);

// Fecha a conexão com o banco de dados
$conn->close();
?>
