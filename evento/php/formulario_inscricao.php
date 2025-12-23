<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Inscrição</title>
    <link rel="stylesheet" href="../css/formulario_inscricao.css">
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
                <a href="login.php"><img src="../img/user-icon.png" alt="Perfil do Usuário"></a>
                <a href="historico.php"><img src="../img/historico-icon.png" alt="Histórico"></a>
            </div>
        </div>
    </nav>

    <div class="container">
        <div class="row">
            <!-- COLUNA ESQUERDA: DETALHES DO EVENTO -->
            <div class="col-left">
                <?php
                // Conexão com o banco de dados
                $conexao = new mysqli("localhost", "root", "1234", "projeto_eventos01");

                if ($conexao->connect_error) {
                    die("Falha na conexão: " . $conexao->connect_error);
                }

                // Recupera o ID do evento via GET
                $idEvento = isset($_GET['id']) ? intval($_GET['id']) : 1;

                $sql = "SELECT eveTitulo, eveDescricao, eveLocal, eveData, eveImgCapa 
                        FROM evento WHERE idEvento = ?";
                $stmt = $conexao->prepare($sql);
                $stmt->bind_param("i", $idEvento);
                $stmt->execute();
                $result = $stmt->get_result();

                if ($result->num_rows > 0) {
                    $row = $result->fetch_assoc();
                    ?>
                    <div class="event-details">
                        <img src="../img/evento_imagem.jpeg" alt="Imagem do Evento">
                        <h2>Detalhes do Evento</h2>
                        <p>
                            <strong>Título:</strong> <?php echo htmlspecialchars($row['eveTitulo']); ?><br>
                            <strong>Data:</strong> <?php echo date('d/m/Y', strtotime($row['eveData'])); ?><br>
                            <strong>Local:</strong> <?php echo htmlspecialchars($row['eveLocal']); ?>
                        </p>
                        <p><?php echo htmlspecialchars($row['eveDescricao']); ?></p>
                    </div>
                    <?php
                } else {
                    echo "<p>Nenhum evento encontrado.</p>";
                }

                $conexao->close();
                ?>
            </div>

            <!-- COLUNA DIREITA: FORMULÁRIO -->
            <div class="col-right">
                <div class="registration-form">
                    <h2>Formulário de Inscrição</h2>
                    <form action="processo_formulario.php" method="post">
                        <input type="hidden" name="idEvento" value="<?php echo $idEvento; ?>">
                        
                        <label for="nome">Nome Completo:</label><br>
                        <input type="text" id="nome" name="nome" required><br>

                        <label for="telefone">Telefone:</label><br>
                        <input type="text" id="telefone" name="telefone" required><br>

                        <label for="email">E-mail:</label><br>
                        <input type="email" id="email" name="email" required><br><br>

                        <button type="submit">Enviar Inscrição</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <footer>
       <p class="rodape">© 2024 BrFideliza. Todos os direitos reservados.</p>
    </footer>
</body>
</html>