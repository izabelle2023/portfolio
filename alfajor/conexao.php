<?php
define('HOST', 'localhost');
<<<<<<< HEAD
define('USUARIO', 'id19140983_usuarioalfajor');
define('SENHA', 'Universo.2022');
define('DB', 'id19140983_alfajor');

$conexao = mysqli_connect(HOST, USUARIO, SENHA, DB) or die ('Não foi possível conectar'); 
=======
define('USUARIO', 'root');
define('SENHA', '1234');
define('DB', 'login');

$conexao = mysqli_connect(HOST, USUARIO, SENHA, DB);

if (!$conexao) {
    die('Erro na conexão: ' . mysqli_connect_error());
}
?>
>>>>>>> c8c573566050621a4a456124af49f78cfa6b8dc3
