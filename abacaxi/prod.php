<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "meu_banco";

// Conexão com o banco
$conn = new mysqli($servername, $username, $password, $dbname);

// Verifica conexão
if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}

// Cria tabela de produtos
$sql = "CREATE TABLE IF NOT EXISTS produtos (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    descricao TEXT,
    preco DECIMAL(10,2) NOT NULL,
    quantidade INT(11) DEFAULT 0,
    data_cadastro TIMESTAMP DEFAULT CURRENT_TIMESTAMP
)";

if ($conn->query($sql) === TRUE) {
    echo "Tabela 'produtos' criada com sucesso!";
} else {
    echo "Erro ao criar tabela: " . $conn->error;
}

$conn->close();
?>
