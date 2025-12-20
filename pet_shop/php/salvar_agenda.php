<?php
session_start();
require_once "conexao.php";

/* CONEXÃO */
$conn = new mysqli($host, $usuario, $senha, $banco);
if ($conn->connect_error) {
    die("Erro na conexão: " . $conn->connect_error);
}

// Recebe os dados do formulário
$nome         = $_POST['nome'] ?? '';
$email        = $_POST['email'] ?? '';
$cpf          = $_POST['cpf'] ?? '';
$celular      = $_POST['celular'] ?? '';
$telefone     = $_POST['telefone'] ?? '';
$nome_pet     = $_POST['nome_pet'] ?? '';
$idade        = $_POST['idade'] ?? '';
$dtnasc       = $_POST['dtnasc'] ?? '';
$raca         = $_POST['raca'] ?? '';
$servicos     = isset($_POST['servico']) ? implode(", ", $_POST['servico']) : '';
$localidade   = $_POST['localidade'] ?? '';
$data_servico = $_POST['data_servico'] ?? '';
$hora_servico = $_POST['hora_servico'] ?? '';

// Validação obrigatória da data de nascimento
if (empty($dtnasc)) {
  die("Erro: A data de nascimento do pet é obrigatória.");
}

// Validação extra: formato correto de data (opcional)
if (!preg_match("/^\d{4}-\d{2}-\d{2}$/", $dtnasc)) {
  die("Erro: Formato de data inválido. Use AAAA-MM-DD.");
}

// Prepara e executa a inserção no banco
$sql = "INSERT INTO agenda (
  nome, email, cpf, celular, telefone, nome_pet, idade, dtnasc, raca, servicos, localidade, data_servico, hora_servico
) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

$stmt = $conn->prepare($sql);
if (!$stmt) {
  die("Erro na preparação da query: " . $conn->error);
}

$stmt->bind_param(
  "ssssssissssss",
  $nome, $email, $cpf, $celular, $telefone,
  $nome_pet, $idade, $dtnasc, $raca,
  $servicos, $localidade, $data_servico, $hora_servico
);

if ($stmt->execute()) {
  $_SESSION['nome'] = $nome;
  $_SESSION['data_servico'] = $data_servico;
  $_SESSION['hora_servico'] = $hora_servico;

  header("Location: agenda_sucesso.php");
  exit;
} else {
  echo "Erro ao salvar: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>