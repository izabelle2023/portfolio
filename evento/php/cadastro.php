<?php
require_once 'config.php';

$erro = '';
$nome = $cpf = $telefone = $email = '';

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $nome     = trim($_POST['nome']);
    $cpf      = trim($_POST['cpf']);
    $telefone = trim($_POST['telefone']);
    $email    = trim($_POST['email']);
    $senha    = $_POST['senha'];

    // =========================
    // VALIDAÇÕES
    // =========================
    if (!$nome || !$cpf || !$telefone || !$email || !$senha) {
        $erro = "Todos os campos são obrigatórios.";

    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $erro = "E-mail inválido.";

    // CPF compatível com INT do banco (1 a 9 dígitos)
    } elseif (!preg_match("/^\d{1,9}$/", $cpf)) {
        $erro = "CPF inválido. Digite apenas números (até 9 dígitos).";

    } elseif (!preg_match("/^\d{10,11}$/", $telefone)) {
        $erro = "Telefone inválido. Digite apenas números (10 ou 11 dígitos).";

    } else {

        // =========================
        // VERIFICA E-MAIL
        // =========================
        $sql = "SELECT idPessoa FROM pessoa WHERE email = ?";
        $stmt = $conexao->prepare($sql);
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $stmt->store_result();

        if ($stmt->num_rows > 0) {
            $erro = "Este e-mail já está cadastrado.";
            $stmt->close();
        } else {
            $stmt->close();

            // =========================
            // INSERÇÃO
            // =========================
            $senhaHash = password_hash($senha, PASSWORD_DEFAULT);

            $sql = "INSERT INTO pessoa
            (nomeCompleto, CPF, telefone, email, senha, ativo, dataRegistro, dataUltimaAtualizacao)
            VALUES (?, ?, ?, ?, ?, 1, NOW(), NOW())";

            $stmt = $conexao->prepare($sql);
            $stmt->bind_param("sisss", $nome, $cpf, $telefone, $email, $senhaHash);

            if ($stmt->execute()) {
                header("Location: cadastro_sucesso.php");
                exit;
            } else {
                $erro = "Erro ao cadastrar.";
            }

            $stmt->close();
        }
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<title>Cadastro | BrFideliza</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<style>
*{margin:0;padding:0;box-sizing:border-box}

:root{
    --primaria:#A91528;
    --secundaria:#7f0f1d;
    --fundo:#f5f6f8;
    --branco:#fff;
}

body{font-family:Arial,sans-serif;background:var(--fundo)}

.tab{background:var(--primaria);padding:10px 0}
#navbar_marca{max-width:900px;margin:auto;display:flex;justify-content:space-between;align-items:center;padding:0 16px}
#logo{display:flex;align-items:center;gap:10px;color:#fff;font-weight:600}
#logo img{width:50px;height:50px;border-radius:50%}
#menu img{width:30px;margin-left:15px}

#card_principal_cadastro{
    min-height:calc(100vh - 100px);
    display:flex;
    justify-content:center;
    align-items:center;
    padding:20px;
}

#card_cadastro{
    background:var(--primaria);
    color:#fff;
    width:100%;
    max-width:460px;
    padding:35px;
    border-radius:18px;
}

.logo_grande img{
    width:110px;
    height:110px;
    border-radius:50%;
    margin-bottom:10px;
}

form label{text-align:left;display:block;margin-top:12px}
form input{
    width:100%;
    padding:12px;
    border:none;
    border-radius:8px;
    margin-top:5px;
}

button{
    width:100%;
    margin-top:20px;
    padding:12px;
    background:#DC3545;
    border:none;
    border-radius:8px;
    color:#fff;
    font-size:16px;
    cursor:pointer;
}

.erro{
    background:#f8d7da;
    color:#721c24;
    padding:10px;
    border-radius:6px;
    margin-bottom:15px;
}

footer{
    background:var(--primaria);
    color:#fff;
    text-align:center;
    padding:15px;
}
</style>
</head>

<body>

<nav class="tab">
    <div id="navbar_marca">
        <div id="logo">
            <img src="../img/logo.jpg">
            <span>BrFideliza</span>
        </div>
        <div id="menu">
            <a href="../home.php"><img src="../img/home-icon.png"></a>
            <a href="login.php"><img src="../img/user-icon.png"></a>
        </div>
    </div>
</nav>

<div id="card_principal_cadastro">
<div id="card_cadastro">

<div class="logo_grande">
    <img src="../img/logo.jpg">
</div>

<h1>Cadastre-se</h1>

<?php if ($erro): ?>
    <div class="erro"><?= htmlspecialchars($erro) ?></div>
<?php endif; ?>

<form method="POST">
    <label>Nome Completo</label>
    <input type="text" name="nome" value="<?= htmlspecialchars($nome) ?>">

    <label>CPF (até 9 dígitos)</label>
    <input type="text" name="cpf" value="<?= htmlspecialchars($cpf) ?>">

    <label>Telefone</label>
    <input type="text" name="telefone" value="<?= htmlspecialchars($telefone) ?>">

    <label>E-mail</label>
    <input type="email" name="email" value="<?= htmlspecialchars($email) ?>">

    <label>Senha</label>
    <input type="password" name="senha">

    <button type="submit">Cadastrar</button>
</form>

</div>
</div>

<footer>
© 2024 BrFideliza. Todos os direitos reservados.
</footer>

</body>
</html>
