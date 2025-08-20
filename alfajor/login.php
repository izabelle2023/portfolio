<?php
session_start();
include('conexao.php');

if (empty($_POST['usuario']) || empty($_POST['senha'])) {
    header('Location: index.php');
    exit;
}

$usuario = mysqli_real_escape_string($conexao, $_POST['usuario']);
$senha = $_POST['senha'];

$sql = "SELECT nome, senha FROM usuario WHERE usuario = '$usuario'";
$result = mysqli_query($conexao, $sql);
$usuario_bd = mysqli_fetch_assoc($result);

if ($usuario_bd && password_verify($senha, $usuario_bd['senha'])) {
    $_SESSION['nome'] = $usuario_bd['nome'];
    header('Location: painel.php');
    exit;
} else {
    $_SESSION['nao_autenticado'] = true;
    header('Location: index.php');
    exit;
}
?>