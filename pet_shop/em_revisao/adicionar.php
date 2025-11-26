<?php
include("conexao.php");

$id = $_POST['id'];
$qtd = $_POST['quantidade'];

$sql = "INSERT INTO carrinho (produto_id, quantidade) VALUES (?, ?)";
$stmt = $conexao->prepare($sql);
$stmt->bind_param("ii", $id, $qtd);
$stmt->execute();

echo json_encode(["mensagem" => "Produto adicionado ao carrinho!"]);
?>