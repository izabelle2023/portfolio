<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirmação de Inscrição</title>

    <!-- Caminho absoluto para evitar erro ao usar parâmetros GET -->
    <link rel="stylesheet" href="http://localhost:82/brfidelizafinal/CSS/confirmacao_inscricao.css">

    <script src="https://cdn.jsdelivr.net/npm/qrcodejs@1.0.0/qrcode.min.js"></script>
</head>

<body>

    <nav class="navbar bg-body-tertiary tab">
        <div class="container-fluid" id="navbar_marca">
            <div id="logo">
                <span class="navbar-brand mb-0" style="color: white;">
                    <img src="img/logo.jpg" alt="BrFideliza"> BrFideliza
                </span>
            </div>

            <div id="menu">
                <a href="home.php"><img src="img/home-icon.png" alt="Página Inicial"></a>
                <a href="login.php"><img src="img/user-icon.png" alt="Perfil do Usuário"></a>
                <a href="historico.php"><img src="img/historico-icon.png" alt="Histórico"></a>
            </div>
        </div>
    </nav>

    <div class="container">
        <h2>Confirmação de Inscrição</h2>
        <p>Sua inscrição foi realizada com sucesso!</p>

        <div id="qrcode"></div>

        <form id="notificationForm" method="post">
            <label for="email">E-mail:</label>
            <input type="email" id="email" name="email" required>

            <input type="hidden" id="qr_code" name="qr_code">

            <button type="submit">Enviar Notificação</button>
        </form>

        <script>
            // Função para pegar parâmetro da URL
            function getQueryParam(param) {
                const urlParams = new URLSearchParams(window.location.search);
                return urlParams.get(param);
            }

            // Pegando QR Code enviado pela URL
            const qrCodeURL = getQueryParam('qr_code');

            if (qrCodeURL) {
                // Gera o QR na tela
                new QRCode(document.getElementById("qrcode"), {
                    text: qrCodeURL,
                    width: 128,
                    height: 128
                });

                // Envia para o formulário oculto
                document.getElementById('qr_code').value = qrCodeURL;

            } else {
                document.getElementById("qrcode").innerText = "QR Code não encontrado.";
            }
        </script>
    </div>

    <footer>
        <p class="rodape" style="color: white;">© 2024 BrFideliza. Todos os direitos reservados.</p>
    </footer>


    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        // Dados do formulário
        $email = $_POST['email'];
        $qr_code = $_POST['qr_code'];

        // Assunto
        $subject = "Confirmação de Inscrição - Código de Pagamento PIX";

        // Corpo do e-mail (corrigido + QR Code moderno)
        $message = "
        <html>
        <head>
            <title>Confirmação de Inscrição</title>
        </head>
        <body>
            <h2>Confirmação de Inscrição</h2>
            <p>Sua inscrição foi realizada com sucesso! Use o código PIX abaixo para realizar o pagamento:</p>

            <p><strong>$qr_code</strong></p>

            <div style='text-align:center;'>
                <img src='https://api.qrserver.com/v1/create-qr-code/?size=200x200&data=$qr_code' alt='QR Code PIX'>
            </div>
        </body>
        </html>
        ";

        // Cabeçalhos
        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
        $headers .= "From: no-reply@brfideliza.com\r\n";

        // Envio do e-mail
        if (mail($email, $subject, $message, $headers)) {
            echo "<script>alert('E-mail enviado com sucesso!');</script>";
        } else {
            echo "<script>alert('Falha no envio do e-mail. Verifique as configurações do servidor.');</script>";
        }
    }
    ?>

</body>
</html>
