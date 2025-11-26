<?php
define('HOST', 'localhost');
define('USUARIO', 'id19140983_usuarioalfajor');
define('SENHA', 'Universo.2022');
define('DB', 'id19140983_alfajor');

$conexao = mysqli_connect(HOST, USUARIO, SENHA, DB) or die ('Não foi possível conectar'); 