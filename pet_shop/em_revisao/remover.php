<?php
include("conexao.php");

$id = $_POST['id'];
$sql = "DELETE FROM carrinho WHERE id = ?";
$stmt = $conexao->prepare($sql);
$stmt->bind_param("i", $id);
$stmt->execute();
?>