<?php
require_once '../config.php';

// Inicialização da variável de filtro
$statusFilter = '';

// Verifica se o filtro por status foi enviado via GET
if (isset($_GET['status'])) {
    $statusFilter = $_GET['status'];
    // Verifica se o valor do filtro é válido (inscrito, pago, presente)
    if (!in_array($statusFilter, ['inscrito', 'pago', 'presente'])) {
        $statusFilter = ''; // Caso não seja válido, limpa o filtro
    }
}

// Query para obter as inscrições, com filtro opcional por status de pagamento
$sql = "SELECT i.idInscricao, i.insDataRegistro, e.eveTitulo, p.nomeCompleto, p.telefone, p.email, COALESCE(pg.pag_status, 'inscrito') as pag_status
        FROM inscricao i
        INNER JOIN evento e ON i.evento_idEvento = e.idEvento
        INNER JOIN pedido pd ON i.pedido_idPedido = pd.idPedido
        INNER JOIN pessoa p ON pd.Pessoa_idPessoa = p.idPessoa
        LEFT JOIN pagamento pg ON pd.idPedido = pg.pedido_idPedido";

// Aplica o filtro se um status válido foi selecionado
if (!empty($statusFilter)) {
    $sql .= " WHERE COALESCE(pg.pag_status, 'inscrito') = '$statusFilter'";
}

$sql .= " ORDER BY i.insDataRegistro DESC";

$result = $conexao->query($sql);
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administração de Inscrições</title>
    <link rel="stylesheet" href="../CSS/admin.css"> <!-- Estilo CSS -->
</head>
<body>
    <nav class="navbar bg-body-tertiary tab">
        <div class="container-fluid" id="navbar_marca">
            <div id="logo">
                <span class="navbar-brand mb-0" style="color: white;"><img src="../img/logo.jpg" alt="BrFideliza">BrFideliza</span>
            </div>
            <div id="menu">
                <a href="../home.php"><img src="../img/home-icon.png" alt="Página Inicial"></a>
                <a href="../login.php"><img src="../img/user-icon.png" alt="Perfil do Usuário"></a>
                <a href="../historico.php"><img src="../img/historico-icon.png" alt="Histórico"></a>
            </div>
        </div>
    </nav>

    <div class="container">
        <h2>Administração de Inscrições</h2>

        <!-- Formulário de filtro por status -->
        <form action="admin.php" method="get">
            <label for="status">Filtrar por status:</label>
            <select name="status" id="status">
                <option value="">Todos</option>
                <option value="inscrito" <?php echo ($statusFilter == 'inscrito') ? 'selected' : ''; ?>>Inscrito</option>
                <option value="pago" <?php echo ($statusFilter == 'pago') ? 'selected' : ''; ?>>Pago</option>
                <option value="presente" <?php echo ($statusFilter == 'presente') ? 'selected' : ''; ?>>Presente</option>
            </select>
            <button type="submit">Filtrar</button>
        </form>

        <!-- Tabela de Inscrições -->
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Data de Inscrição</th>
                    <th>Evento</th>
                    <th>Nome</th>
                    <th>Telefone</th>
                    <th>E-mail</th>
                    <th>Status Pagamento</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>" . $row["idInscricao"] . "</td>";
                        echo "<td>" . date('d/m/Y H:i:s', strtotime($row["insDataRegistro"])) . "</td>";
                        echo "<td>" . $row["eveTitulo"] . "</td>";
                        echo "<td>" . $row["nomeCompleto"] . "</td>";
                        echo "<td>" . $row["telefone"] . "</td>";
                        echo "<td>" . $row["email"] . "</td>";
                        echo "<td>" . ucfirst($row["pag_status"]) . "</td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='7'>Nenhuma inscrição encontrada.</td></tr>";
                }
                ?>
            </tbody>
        </table>
        
        <!-- Links para exportação -->
        <div class="export-links">
            <a href="export.php?type=pdf&status=<?php echo $statusFilter; ?>">Exportar para PDF</a>
            <a href="export.php?type=csv&status=<?php echo $statusFilter; ?>">Exportar para CSV</a>
            <a href="export.php?type=excel&status=<?php echo $statusFilter; ?>">Exportar para Excel</a>
        </div>
    </div>
    
    <footer>
       <p class="rodape">© 2024 BrFideliza. Todos os direitos reservados.</p>
    </footer>
</body>
</html>

<?php
// Fechar conexão com o banco de dados
$conexao->close();
?>
