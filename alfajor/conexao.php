<?php
define('HOST', 'localhost');
define('USUARIO', 'root');
define('SENHA', '1234');
define('DB', 'login');

$conexao = mysqli_connect(HOST, USUARIO, SENHA, DB);

if (!$conexao) {
    die('Erro na conexão: ' . mysqli_connect_error());
}
?>