<?php
session_start();

// Redireciona se não estiver logado
if (!isset($_SESSION['email'])) {
    header('Location: login.php');
    exit();
}

$logado = $_SESSION['email'];
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Bem-vindo | BrFideliza</title>
<link rel="stylesheet" href="sistema.css">
<style>
/* Reset básico */
* { margin:0; padding:0; box-sizing:border-box; }

/* Navbar */
.tab { background-color:#A91528; padding:10px 0; }
#navbar_marca { max-width:900px; margin:auto; padding:0 16px; display:flex; justify-content:space-between; align-items:center; }
#logo { display:flex; align-items:center; gap:10px; color:#fff; font-size:18px; font-weight:600; }
#logo img { width:52px; height:52px; border-radius:50%; }
#menu img { width:32px; margin-left:18px; cursor:pointer; transition: transform 0.2s; }
#menu img:hover { transform:scale(1.15); }

/* Conteúdo */
.container { max-width:900px; margin:50px auto; text-align:center; }
.container a { margin:0 10px; text-decoration:none; color:#A91528; font-weight:bold; }
.container a:hover { text-decoration:underline; }

h1 { margin-top:20px; color:#A91528; }

/* Footer *//* Footer fixo */
footer { 
    position: fixed; 
    bottom: 0; 
    left: 0; 
    width: 100%; 
    background-color:#A91528; 
    height:50px; 
    display:flex; 
    align-items:center; 
    justify-content:center; 
    color:white; 
    font-size:0.9em; 
}</style>
</head>
<body>

<nav class="tab">
    <div id="navbar_marca">
        <div id="logo">
            <img src="../img/logo.jpg" alt="BrFideliza">
            <span>BrFideliza</span>
        </div>
        <div id="menu">
            <a href="../home.php"><img src="../img/home-icon.png" alt="Home"></a>
            <a href="historico.php"><img src="../img/historico-icon.png" alt="Histórico"></a>
            <a href="sair.php"><img src="../img/user-icon.png" alt="Sair"></a>
        </div>
    </div>
</nav>

<div class="container">
    <h1>Bem-vindo, <u><?= htmlspecialchars($logado) ?></u></h1>
    <div style="margin-top:20px;">
        <a href="../home.php">Home</a>
        <a href="sair.php">Sair</a>
    </div>
</div>

<footer>
    © 2024 BrFideliza. Todos os direitos reservados.
</footer>

</body>
</html>
