<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="historico.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>Evento</title>
</head>
<body>
    <?php
    include 'config.php';
    // Verifica se a conexão com o banco de dados foi estabelecida
    if ($conexao->connect_error) {
        die("Erro ao conectar ao banco de dados: " . $conexao->connect_error);
    }
    // Consulta SQL para obter os eventos
    $sql = "SELECT * FROM evento";
    $result = $conexao->query($sql);
    ?>
  <nav class="navbar bg-body-tertiary tab">
        <div class="container-fluid" id="navbar_marca">
            <div id="logo">
                <span class="navbar-brand mb-0" style="color: white;"><img src="img/logo.jpg" alt="BrFideliza">BrFideliza</span> <!-- Logotipo da marca -->
            </div>
            <div id="menu">
                <?php if(isset($_SESSION['usuario'])): ?>
                    <p class="navbar-text" style="color: white;">Seja bem-vindo, <?php echo $_SESSION['usuario']; ?></p> <!-- Exibe a mensagem de boas-vindas -->
                <?php endif; ?>
                <a href="home.php"><img src="img/home-icon.png" alt="Página Inicial"></a> <!-- Ícone para página inicial -->
                <a href="login.php"><img src="img/user-icon.png" alt="Perfil do Usuário"></a> <!-- Ícone para perfil do usuário -->
                <a href="historico.php"><img src="img/historico-icon.png" alt="Histórico"></a> <!-- Ícone para histórico -->
            </div>
        </div>
    </nav>
    <div class="row secao_historico">
        <div class="col-10">
            <?php
            // Verifica se há eventos para exibir
            if ($result->num_rows > 0) {
                // Loop pelos resultados da consulta
                while ($row = $result->fetch_assoc()) {
                    echo '<div class="card_historico">';
                    echo '<img class="" src="IMG/evento_imagem.jpeg" alt="">';
                    echo '<div class="info_card_historico">';
                    echo '<p class="historico_nome_produto">' . $row["eveTitulo"] . '</p>';
                    echo '<p>Organizador: ' . $row["empresa_idEmpresa"] . '</p>';
                    echo '<p>Pago no cartão de crédito</p>';
                    echo '<p class="mt-4 mb-2">Valor: R$' . $row["eveVlIngresso"] . '</p>';
                    echo '<p class="btn-card-historico">';
                    echo '<a href="#"><i class="fa fa-refresh" aria-hidden="true"></i> Ver informações</a>';
                    echo '<a href="#"><i class="fa fa-trash" aria-hidden="true"></i> Entrar em contato com o organizador</a>';
                    echo '<a href="#"><i class="fa fa-shopping-cart" aria-hidden="true"></i> Pedir Reembolso?</a>';
                    echo '</p>';
                    echo '</div>';
                    echo '</div>';
                }
            } else {
                echo "<p>Nenhum evento encontrado</p>";
            }
            ?>
        </div>
    </div>
    <footer>
       <p class="rodape">© 2024 BrFideliza. Todos os direitos reservados.</p>
    </footer>
</body>
</html>
