<?php
require_once '../config.php';

// Query para obter as inscrições
$sql = "SELECT i.idInscricao, i.insDataRegistro, e.eveTitulo, p.nomeCompleto, p.email, pg.pag_status
        FROM inscricao i
        INNER JOIN evento e ON i.evento_idEvento = e.idEvento
        INNER JOIN pedido pd ON i.pedido_idPedido = pd.idPedido
        INNER JOIN pessoa p ON pd.Pessoa_idPessoa = p.idPessoa
        LEFT JOIN pagamento pg ON pd.idPedido = pg.pedido_idPedido
        ORDER BY i.insDataRegistro DESC";
$result = $conexao->query($sql);

// Cabeçalho para download do arquivo CSV
header('Content-Type: text/csv; charset=utf-8');
header('Content-Disposition: attachment; filename=inscricoes.csv');

// Cria um arquivo de saída temporário
$output = fopen('php://output', 'w');

// Cabeçalho do CSV
fputcsv($output, array('ID', 'Data de Inscrição', 'Evento', 'Nome', 'E-mail', 'Status Pagamento'));

// Dados das inscrições
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        fputcsv($output, array($row["idInscricao"], date('d/m/Y H:i:s', strtotime($row["insDataRegistro"])), $row["eveTitulo"], $row["nomeCompleto"], $row["email"], ucfirst($row["pag_status"])));
    }
}

// Fechar arquivo de saída
fclose($output);

// Fechar conexão com o banco de dados
$conexao->close();
?>
