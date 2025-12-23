<?php
session_start();
include_once('config.php'); // Caminho correto dentro da pasta php

$linha = null;

if (isset($_GET['id'])) {
    $idEvento = $_GET['id'];

    if (!filter_var($idEvento, FILTER_VALIDATE_INT)) {
        header('Location: home.php');
        exit();
    } else {
        $sql = "SELECT * FROM evento WHERE idEvento = ?";
        $stmt = $conexao->prepare($sql);
        $stmt->bind_param("i", $idEvento);
        $stmt->execute();
        $result = $stmt->get_result();
        $linha = $result->fetch_assoc();
    }
} else {
    header('Location: home.php');
    exit();
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página de Eventos - BrFideliza</title>
    <link rel="stylesheet" href="../css/pagina_evento.css">
</head>
<body>
    <nav class="navbar">
        <div class="navbar-content">
            <div class="logo-area">
                <img src="../img/logo.jpg" alt="BrFideliza">
                <span>BrFideliza</span>
            </div>
            <div class="menu-icons">
                <a href="home.php"><img src="../img/home-icon.png" alt="Página Inicial"></a>
                <a href="login.php"><img src="../img/user-icon.png" alt="Perfil do Usuário"></a>
                <a href="historico.php"><img src="../img/historico-icon.png" alt="Histórico"></a>
            </div>
        </div>
    </nav>

    <main class="container">
        <div class="card">
            <?php if ($linha): ?>
                <div class="image-container">
                    <img src="../img/evento_imagem.jpeg" alt="Imagem do Evento">
                    <h5 class="card-title"><?php echo htmlspecialchars($linha['eveTitulo']); ?></h5>
                </div>
                <div class="card-body">
                    <p>Descrição: <?php echo htmlspecialchars($linha['eveDescricao']); ?></p>
                    <hr>
                    <p>Data inicial: <?php echo date('d/m/Y', strtotime($linha['eveDtIniInscricao'])); ?></p>
                    <p>Horário inicial: <?php echo !empty($linha['eveHrIniInscricao']) ? htmlspecialchars($linha['eveHrIniInscricao']) : 'N/A'; ?></p>
                    <p>Data final: <?php echo date('d/m/Y', strtotime($linha['eveDtFimInscricao'])); ?></p>
                    <p>Local: <?php echo htmlspecialchars($linha['eveLocal']); ?></p>
                    <p>Total de vagas: <?php echo htmlspecialchars($linha['eveVagas']); ?></p>
                    <p>Valor do ingresso: R$ <?php echo number_format($linha['eveVlIngresso'], 2, ',', '.'); ?></p>
                    <a href="formulario_inscricao.php" class="btn">Comprar ingresso</a>
                </div>
            <?php else: ?>
                <div class="card-body">
                    <h5 class="card-title">Evento não encontrado</h5>
                    <p>O evento solicitado não existe ou está indisponível.</p>
                </div>
            <?php endif; ?>
        </div>
    </main>

    <footer>
        <p class="rodape">© 2024 BrFideliza. Todos os direitos reservados.</p>
    </footer>
</body>
</html>