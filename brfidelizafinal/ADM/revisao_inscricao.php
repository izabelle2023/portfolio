<?php
require_once '../config.php'; // Assuming this file contains database connection details

// Query to retrieve pending registrations
$sql = "SELECT i.idInscricao, i.insDataRegistro, e.eveTitulo, p.nomeCompleto, p.email
        FROM inscricao i
        INNER JOIN evento e ON i.evento_idEvento = e.idEvento
        INNER JOIN pedido pd ON i.pedido_idPedido = pd.idPedido
        INNER JOIN pessoa p ON pd.Pessoa_idPessoa = p.idPessoa
        WHERE i.ins_confirmada = 0
        ORDER BY i.insDataRegistro DESC";

$result = $conexao->query($sql);
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Revisão de Inscrições</title>
    <link rel="stylesheet" href="../CSS/admin.css"> <!-- Custom CSS -->
</head>
<body>
    <!-- Navbar -->
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

    <!-- Main content -->
    <div class="container">
        <h2>Revisão de Inscrições Pendentes</h2>

        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Data de Inscrição</th>
                    <th>Evento</th>
                    <th>Nome</th>
                    <th>E-mail</th>
                    <th>Ação</th>
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
                        echo "<td>" . $row["email"] . "</td>";
                        echo "<td><a href='review.php?confirm=true&id=" . $row["idInscricao"] . "'>Confirmar</a></td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='6'>Nenhuma inscrição pendente para revisão.</td></tr>";
                }
                ?>
            </tbody>
        </table>
    </div>

    <!-- Footer -->
    <footer>
       <p class="rodape">© 2024 BrFideliza. Todos os direitos reservados.</p>
    </footer>
</body>
</html>

<?php
// Close database connection
$conexao->close();
?>
