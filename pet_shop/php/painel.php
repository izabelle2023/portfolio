<?php
session_start();

if (!isset($_SESSION['nome'])) {
    header('Location: login.php');
    exit;
}

$carrinho = $_SESSION['carrinho'] ?? [];
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Painel do Usuário | Amor Au Pet</title>
    <link rel="stylesheet" href="../css/painel.css">
</head>
<body>

<!-- TOPO -->
<header class="top-bar">
    <div class="logo"><span>Amor</span> Au Pet</div>
    <div class="top-info">
        <div>
            <strong>Horário de Funcionamento:</strong><br>
            Das 8h às 22h
        </div>
        <div>
            <strong>Contato:</strong><br>
            (61) 9999-9999
        </div>
    </div>
</header>

<!-- MENU -->
<nav class="navbar">
    <ul>
        <li><a class="active" href="painel.php">Painel</a></li>
        <li><a href="cachorro.php">Cachorros</a></li>
        <li><a href="gato.php">Gatos</a></li>
        <li><a href="promocao.php">Promoções</a></li>
        <li><a href="agenda.php">Agendamento</a></li>
    </ul>

    <div class="nav-user">
        <span>Olá, <?= htmlspecialchars($_SESSION['nome']) ?></span>
        <a href="logout.php">Sair</a>
    </div>
</nav>

<!-- CONTEÚDO PRINCIPAL -->
<main>

    <!-- BOAS-VINDAS -->
    <section>
        <h2>🐾 Bem-vinda ao seu painel</h2>
        <p>Aqui você pode acompanhar seus dados, pedidos e carrinho.</p>
    </section>

    <!-- MEUS DADOS -->
    <section class="cart">
        <h3>👤 Meus Dados</h3>
        <p><strong>Nome:</strong> <?= htmlspecialchars($_SESSION['nome']) ?></p>
        <!-- depois você pode adicionar email, telefone, etc -->
    </section>

    <!-- MEUS PEDIDOS -->
    <section class="cart">
        <h3>📦 Meus Pedidos</h3>
        <p>Você ainda não possui pedidos finalizados.</p>
        <!-- futuramente: tabela de pedidos -->
    </section>

    <!-- CARRINHO (ATALHO / RESUMO) -->
    <section class="cart">
        <h3>🛒 Meu Carrinho</h3>

        <?php if (!empty($carrinho)): ?>
            <table>
                <tr>
                    <th>Produto</th>
                    <th>Qtd</th>
                    <th>Subtotal</th>
                </tr>

                <?php $total = 0; ?>
                <?php foreach ($carrinho as $item): ?>
                    <?php
                        $subtotal = $item['preco'] * $item['quantidade'];
                        $total += $subtotal;
                    ?>
                    <tr>
                        <td><?= htmlspecialchars($item['nome']) ?></td>
                        <td><?= $item['quantidade'] ?></td>
                        <td>R$ <?= number_format($subtotal, 2, ',', '.') ?></td>
                    </tr>
                <?php endforeach; ?>
            </table>

            <p class="total">Total: R$ <?= number_format($total, 2, ',', '.') ?></p>

            <div class="cart-actions">
                <a href="carrinho.php">Ver carrinho</a>
                <a class="btn" href="checkout.php">Finalizar compra</a>
            </div>

        <?php else: ?>
            <p>Seu carrinho está vazio 🐶</p>
        <?php endif; ?>
    </section>

</main>

<!-- RODAPÉ -->
<footer>
    <p>© Direitos reservados à programadora Izabelle.</p>
</footer>

</body>
</html>
