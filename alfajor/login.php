<?php
session_start();
include('conexao.php');

<<<<<<< HEAD
if(empty($_POST['usuario']) || empty($_POST['senha'])) {
	header('Location: index.php');
	exit();
}

$usuario = mysqli_real_escape_string($conexao, $_POST['usuario']);
$senha = mysqli_real_escape_string($conexao, $_POST['senha']);

$query = "select nome from usuario where usuario = '{$usuario}' and senha = md5('{$senha}')";

$result = mysqli_query($conexao, $query);

$row = mysqli_num_rows($result);

if($row == 1) {
	$usuario_bd = mysqli_fetch_assoc($result);
	$_SESSION['nome'] = $usuario_bd['nome'];
	header('Location: painel.php');
	exit();
} else {
	$_SESSION['nao_autenticado'] = true;
	header('Location: index.php');
	exit();
=======
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
>>>>>>> c8c573566050621a4a456124af49f78cfa6b8dc3
}
?>