<?php
// generate_json.php

header("Content-Type: application/json");

// Configuração do banco de dados
$servername = "localhost";
$username = "root"; // Substitua pelo seu nome de usuário do MySQL
$password = ""; // Substitua pela sua senha do MySQL (ou deixe em branco se não houver senha)
$dbname = "teste_js";

// Criar conexão
$conn = new mysqli($servername, $username, $password, $dbname);

// Checar conexão
if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

// Consulta SQL
$sql = "SELECT nome FROM info_pessoal";
$result = $conn->query($sql);

$nomes = [];
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $nomes[] = $row;
    }
}

// Fechar conexão
$conn->close();

// Salvar dados em um arquivo JSON
file_put_contents('data.json', json_encode($nomes));

