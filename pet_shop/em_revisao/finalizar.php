<?php
include("conexao.php");

$conexao->query("DELETE FROM carrinho");
echo "Compra finalizada com sucesso!";
?>