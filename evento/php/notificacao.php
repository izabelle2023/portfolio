<?php
$email = htmlspecialchars($_POST['email'] ?? '');

/* QR Code fictício padrão */
$qr_code_ficticio = "https://chart.googleapis.com/chart?cht=qr&chs=300x300&chl=PIX_FICTICIO_EVENTO_BRFIDELIZA_50_REAIS";

/* Se não vier QR Code do formulário, usa o fictício */
$qr_code = !empty($_POST['qr_code']) 
    ? htmlspecialchars($_POST['qr_code']) 
    : $qr_code_ficticio;

/* Validação do e-mail */
if (empty($email)) {
    echo "<link rel='stylesheet' href='../css/notificacao.css'>";
    echo "<div class='container'>
            <div class='error'>E-mail não informado.</div>
          </div>";
    exit;
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo "<link rel='stylesheet' href='../css/notificacao.css'>";
    echo "<div class='container'>
            <div class='error'>E-mail inválido.</div>
          </div>";
    exit;
}

$subject = "Confirmação de Inscrição - Código de Pagamento PIX";
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notificação de Inscrição - BrFideliza</title>
    <link rel="stylesheet" href="../css/notificacao.css">
</head>
<body>

<nav class="navbar">
    <div class="navbar-content">
        <div class="logo-area">
            <img src="../img/logo.jpg" alt="BrFideliza">
            <span>BrFideliza</span>
        </div>
        <div class="menu-icons">
            <a href="../home.php"><img src="../img/home-icon.png" alt="Página Inicial"></a>
            <a href="login.php"><img src="../img/user-icon.png" alt="Perfil"></a>
            <a href="historico.php"><img src="../img/historico-icon.png" alt="Histórico"></a>
        </div>
    </div>
</nav>
<div class="container">
    <div class="success">
        <strong>[FICTÍCIO]</strong> E-mail gerado com sucesso!<br>
        Destinatário: <strong><?= htmlspecialchars($email) ?></strong><br>
        Assunto: <strong><?= htmlspecialchars($subject) ?></strong>
    </div>

    <div class="email-box">
        <h2>Confirmação de Inscrição</h2>
        <p>Sua inscrição foi realizada com sucesso!</p>
        <p>Utilize o QR Code PIX abaixo para efetuar o pagamento:</p>

        <div class="qr-area">
            <img src="../img/qrcode.webp" alt="QR Code PIX Fictício">
        </div>

        <p class="pix-label">QR Code PIX </p>
    </div>
</div>


<footer>
    <p class="rodape">© 2024 BrFideliza. Todos os direitos reservados.</p>
</footer>

</body>
</html>
