<?php
include './php/config.php';
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Página Inicial - BrFideliza</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSS -->
    <link rel="stylesheet" href="./css/home.css">
</head>
<body>

<!-- NAVBAR -->
<nav class="navbar tab">
    <div class="container navbar-content">
        <div class="logo-area">
            <img src="./img/logo.jpg" alt="BrFideliza">
            <span>BrFideliza</span>
        </div>

        <div class="menu-icons">
            <a href="home.php"><img src="./img/home-icon.png" alt="Home"></a>
            <a href="./php/login.php"><img src="./img/user-icon.png" alt="Usuário"></a>
            <a href="./php/historico.php"><img src="./img/historico-icon.png" alt="Histórico"></a>
        </div>
    </div>
</nav>

<!-- BUSCA -->
<section class="search-section">
    <form method="GET" class="search-bar">
        <input
            type="text"
            name="search"
            placeholder="Digite o nome do evento..."
            value="<?= htmlspecialchars($_GET['search'] ?? '') ?>"
        >
        <button type="submit">Buscar</button>
    </form>
</section>

<!-- CARDS -->
<div class="container">
    <div class="card-container">
        <?php
        $search = $_GET['search'] ?? '';

        if ($search) {
            $stmt = $conexao->prepare("SELECT * FROM evento WHERE eveTitulo LIKE ?");
            $search = "%$search%";
            $stmt->bind_param("s", $search);
        } else {
            $stmt = $conexao->prepare("SELECT * FROM evento");
        }

        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0):
            while ($linha = $result->fetch_assoc()):
        ?>
            <div class="card card-evento">
                <img src="./img/evento_imagem.jpeg" class="card-img-top" alt="Evento">
                <div class="card-body">
                    <h5 class="card-title"><?= htmlspecialchars($linha['eveTitulo']) ?></h5>
                    <p><strong>Data:</strong> <?= htmlspecialchars($linha['eveData']) ?></p>
                    <p><strong>Local:</strong> <?= htmlspecialchars($linha['eveLocal']) ?></p>
                    <a href="./php/pagina_evento.php?id=<?= $linha['idEvento'] ?>" class="btn btn-danger">
                        Ver detalhes
                    </a>
                </div>
            </div>
        <?php endwhile; else: ?>
            <p class="text-center">Nenhum evento encontrado.</p>
        <?php endif; $stmt->close(); ?>
    </div>
</div>


<!-- FOOTER -->
<footer class="footer">
    <p>© 2024 BrFideliza. Todos os direitos reservados.</p>
</footer>

</body>
</html>
