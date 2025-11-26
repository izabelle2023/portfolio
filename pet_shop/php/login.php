<?php
session_start();
include('conexao.php');

if (empty($_POST['usuario']) || empty($_POST['senha'])) {
    header('Location: index.php');
    exit();
}

$usuario = trim($_POST['usuario']);
$senha = trim($_POST['senha']);

$sql = "SELECT nome, senha FROM usuario WHERE usuario = ?";
$stmt = mysqli_prepare($conexao, $sql);
mysqli_stmt_bind_param($stmt, "s", $usuario);
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);

if ($result && mysqli_num_rows($result) === 1) {
    $usuario_bd = mysqli_fetch_assoc($result);

    // Verifica a senha usando password_verify
    if (password_verify($senha, $usuario_bd['senha'])) {
        $_SESSION['nome'] = $usuario_bd['nome'];
        header('Location: painel.php');
        exit();
    } else {
        $_SESSION['nao_autenticado'] = true;
        header('Location: index.php');
        exit();
    }
} else {
    $_SESSION['nao_autenticado'] = true;
    header('Location: index.php');
    exit();
}
?>
