<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirmação de Inscrição</title>
    <link rel="stylesheet" href="../css/confirmacao_inscricao.css">
    <script src="https://cdn.jsdelivr.net/npm/qrcodejs@1.0.0/qrcode.min.js"></script>
</head>
<body>

    <!-- NAVBAR -->
    <nav class="navbar">
        <div class="navbar-content" id="navbar_marca">
            <div class="logo-area">
                <img src="../img/logo.jpg" alt="BrFideliza">
                <span>BrFideliza</span>
            </div>
            <div class="menu-icons">
                <a href="../home.php"><img src="../img/home-icon.png" alt="Página Inicial"></a>
                <a href="login.php"><img src="../img/user-icon.png" alt="Perfil do Usuário"></a>
                <a href="historico.php"><img src="../img/historico-icon.png" alt="Histórico"></a>
            </div>
        </div>
    </nav>

    <!-- CONTEÚDO PRINCIPAL -->
    <div class="container">
        <h2>Confirmação de Inscrição</h2>
        <p>Sua inscrição foi realizada com sucesso!</p>

        <!-- QR Code -->
        <div id="qrcode"></div>

        <!-- Formulário -->
        <form action="notificacao.php" method="post" target="_blank">
            <label for="email">E-mail:</label>
            <input type="email" id="email" name="email" required>

            <input type="hidden" id="qr_code" name="qr_code">

            <button type="submit">Enviar Notificação</button>
        </form>
    </div>

    <!-- Rodapé -->
    <footer>
        <p class="rodape">© 2024 BrFideliza. Todos os direitos reservados.</p>
    </footer>

    <!-- Script para gerar QR Code -->
    <script>
        function getQueryParam(param) {
            const urlParams = new URLSearchParams(window.location.search);
            return urlParams.get(param);
        }

        const qrCodeURL = getQueryParam('qr_code');
        if (qrCodeURL) {
            new QRCode(document.getElementById("qrcode"), {
                text: qrCodeURL,
                width: 128,
                height: 128
            });
            document.getElementById('qr_code').value = qrCodeURL;
        } else {
            document.getElementById("qrcode").innerText = "QR Code não encontrado.";
        }
    </script>

</body>
</html>