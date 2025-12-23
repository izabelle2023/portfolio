<?php
session_start();
require_once 'config.php'; // Conexão com o banco

$erro = '';
$email = '';

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $email = trim($_POST['email']);
    $senha = $_POST['senha'];

    if (!$email || !$senha) {
        $erro = "Preencha todos os campos!";
    } else {
        // Busca usuário no banco
        $sql = "SELECT idPessoa, senha, nomeCompleto FROM pessoa WHERE email = ?";
        $stmt = $conexao->prepare($sql);
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $stmt->store_result();

        if ($stmt->num_rows === 1) {
            $stmt->bind_result($idPessoa, $senhaHash, $nomeCompleto);
            $stmt->fetch();

            if (password_verify($senha, $senhaHash)) {
                // Login bem-sucedido
                $_SESSION['idPessoa'] = $idPessoa;
                $_SESSION['email'] = $email;
                $_SESSION['nomeCompleto'] = $nomeCompleto;

                header("Location: Sistema.php"); // Redireciona para a página principal
                exit;
            } else {
                $erro = "Senha incorreta!";
            }
        } else {
            $erro = "E-mail não encontrado!";
        }
        $stmt->close();
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Login | BrFideliza</title>
<style>
/* RESET */
* { margin:0; padding:0; box-sizing:border-box; }

/* CORES */
:root {
    --cor-primaria: #A91528;
    --cor-secundaria: #7f0f1d;
    --cor-branco: #ffffff;
    --cor-fundo: #f5f6f8;
    --sombra-card: 0 8px 22px rgba(0,0,0,0.08);
    --sombra-hover: 0 14px 30px rgba(0,0,0,0.14);
}

/* NAVBAR */
.tab { background-color: var(--cor-primaria); padding: 10px 0; }
#navbar_marca { max-width: 900px; margin:auto; padding:0 16px; display:flex; justify-content:space-between; align-items:center; }
#logo { display:flex; align-items:center; gap:10px; color: var(--cor-branco); font-size:18px; font-weight:600; }
#logo img { width:52px; height:52px; border-radius:50%; }
#menu img { width:32px; margin-left:18px; cursor:pointer; transition: transform 0.2s; }
#menu img:hover { transform: scale(1.15); }

/* CARD PRINCIPAL */
#card_principal { min-height: calc(100vh - 100px); background-color: var(--cor-fundo); display:flex; justify-content:center; align-items:center; padding:20px; }
#card_login { background-color: var(--cor-primaria); width:100%; max-width:460px; padding:35px; border-radius:18px; box-shadow: var(--sombra-card); color: var(--cor-branco); text-align:center; }
#card_login h1 { margin-bottom:25px; }

/* FORM */
form label { display:block; text-align:left; margin-bottom:5px; font-size:0.9em; }
form input { width:100%; padding:12px; border-radius:8px; border:none; margin-bottom:14px; transition: all 0.2s; }
form input:focus { outline:2px solid var(--cor-secundaria); }

/* ERRO */
.erro { background-color:#f8d7da; color:#721c24; padding:10px; border-radius:6px; margin-bottom:15px; }

/* BOTÃO */
button { width:100%; padding:12px; font-size:1em; background-color:#DC3545; color:white; border:none; border-radius:8px; cursor:pointer; transition: all 0.2s; }
button:hover { background-color:#bb2d3b; box-shadow: var(--sombra-hover); }

/* FOOTER */
footer { background-color: var(--cor-primaria); height:50px; display:flex; align-items:center; justify-content:center; color:white; font-size:0.9em; }

/* RESPONSIVO */
@media (max-width:576px){#card_login{padding:25px;}}
@media (max-width:400px){#card_login{padding:20px;}}
</style>
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
            <a href="login.php"><img src="../img/user-icon.png" alt="Login"></a>
            <a href="historico.php"><img src="../img/historico-icon.png" alt="Histórico"></a>
        </div>
    </div>
</nav>

<div id="card_principal">
    <div id="card_login">
        <h1>Login</h1>

        <?php if($erro): ?>
            <div class="erro"><?= htmlspecialchars($erro) ?></div>
        <?php endif; ?>

        <form method="POST">
            <label for="email">E-mail</label>
            <input type="email" name="email" id="email" placeholder="Digite seu e-mail" value="<?= htmlspecialchars($email) ?>" required>

            <label for="senha">Senha</label>
            <input type="password" name="senha" id="senha" placeholder="Digite sua senha" required>

            <button type="submit">Entrar</button>
        </form>

        <p style="margin-top:15px;">
            <a href="cadastro.php" style="color:#fff; text-decoration:underline;">Não possui cadastro?</a>
        </p>
    </div>
</div>

<footer>
    © 2024 BrFideliza. Todos os direitos reservados.
</footer>

</body>
</html>
