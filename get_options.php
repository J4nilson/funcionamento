<?php
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

$options = "";
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $options .= "<option value='" . htmlspecialchars($row['nome'], ENT_QUOTES, 'UTF-8') . "'>" . htmlspecialchars($row['nome'], ENT_QUOTES, 'UTF-8') . "</option>";
    }
} else {
    $options = "<option value=''>Nenhum nome encontrado</option>";
}

$conn->close();

echo $options;
