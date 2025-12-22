<?php
session_start();
require_once "conexao.php";

/* CONEXÃO */
$conn = new mysqli($host, $usuario, $senha, $banco);
if ($conn->connect_error) {
    die("Erro na conexão: " . $conn->connect_error);
}

/* VALIDA PEDIDO */
$pedido_id = filter_input(INPUT_GET, 'pedido_id', FILTER_VALIDATE_INT);
if (!$pedido_id) {
    die("Pedido inválido.");
}

/* BUSCA DADOS DO PEDIDO */
$sql_pedido = "
    SELECT p.id, p.total, p.pagamento, u.nome, u.email
    FROM pedidos p
    INNER JOIN usuarios u ON p.usuario_id = u.id
    WHERE p.id = ?
";
$stmt = $conn->prepare($sql_pedido);
$stmt->bind_param("i", $pedido_id);
$stmt->execute();
$resultado = $stmt->get_result();

if ($resultado->num_rows === 0) {
    die("Pedido não encontrado.");
}

$pedido = $resultado->fetch_assoc();

/* BUSCA ITENS DO PEDIDO */
$sql_itens = "
    SELECT pr.nome, pi.quantidade, pi.preco_unitario
    FROM pedido_itens pi
    INNER JOIN produtos pr ON pi.produto_id = pr.id
    WHERE pi.pedido_id = ?
";
$stmt = $conn->prepare($sql_itens);
$stmt->bind_param("i", $pedido_id);
$stmt->execute();
$itens = $stmt->get_result();
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <title>AMOR AU PET</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <link href="../img/favicon.ico" rel="icon">

    <!-- Fontes e ícones -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans&family=Nunito:wght@600;700;800&display=swap" rel="stylesheet"> 
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Bibliotecas -->
    <link href="../lib/flaticon/font/flaticon.css" rel="stylesheet">
    <link href="../lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="../lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/painel.css">
    <link href="../css/style.css" rel="stylesheet">

</head>
<body>


   <!-- ================= CABEÇALHO ================= -->
<div class="container-fluid">
    <div class="row py-3 px-lg-5">

        <!-- Logo -->
        <div class="col-lg-4">
            <a href="index.php" class="navbar-brand d-none d-lg-block">
                <h1 class="m-0 display-5 text-capitalize">
                    <span class="text-primary">Amor</span> Au Pet
                </h1>
            </a>
        </div>

        <!-- Informações -->
        <div class="col-lg-8 text-center text-lg-right">
            <div class="d-inline-flex align-items-center">

                <!-- Horário -->
                <div class="d-inline-flex flex-column text-center pr-3 border-right">
                    <h6>Horário de Funcionamento</h6>
                    <p class="m-0">Das 8h às 22h</p>
                </div>

                <!-- Contato -->
                <div class="d-inline-flex flex-column text-center pl-3">
                    <h6>Contato</h6>
                    <p class="m-0">(61) 9999-9999</p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- ================= MENU DE NAVEGAÇÃO ================= -->
<div class="container-fluid p-0">
    <nav class="navbar navbar-expand-lg bg-dark navbar-dark py-3 py-lg-0 px-lg-5">

        <!-- Logo mobile -->
        <a href="index.php" class="navbar-brand d-block d-lg-none">
            <h1 class="m-0 display-5 text-capitalize">
                <span class="text-primary">Amor</span> Au Pet
            </h1>
        </a>

        <!-- Botão responsivo -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Links -->
        <div class="collapse navbar-collapse justify-content-between px-3" id="navbarCollapse">
            <div class="navbar-nav mr-auto py-0">
                <a href="./index.php" class="nav-item nav-link active">Principal</a>
                <a href="cachorro.php" class="nav-item nav-link">Cachorros</a>
                <a href="gato.php" class="nav-item nav-link">Gatos</a>
                <a href="promocao.php" class="nav-item nav-link">Promoção</a>
                <a href="entrar.php" class="nav-item nav-link">Entrar</a>
                <a href="agenda.php" class="nav-item nav-link">Agende sua visita</a>
            </div>
        </div>
    </nav>
</div> 

<!-- CONTEÚDO -->
<div class="container my-5">
    <h1 class="text-success mb-3">✅ Pedido Confirmado!</h1>

    <p>
        Obrigado, <strong><?= htmlspecialchars($pedido['nome']) ?></strong>.
        Seu pedido foi realizado com sucesso.
    </p>

    <p><strong>Email:</strong> <?= htmlspecialchars($pedido['email']) ?></p>
    <p><strong>Método de Pagamento:</strong> <?= htmlspecialchars($pedido['pagamento']) ?></p>

    <hr>

    <h3>📦 Itens do Pedido</h3>

    <?php if ($itens->num_rows > 0): ?>
        <?php while ($item = $itens->fetch_assoc()): ?>
            <div class="d-flex justify-content-between border-bottom py-2">
                <span><?= htmlspecialchars($item['nome']) ?> x <?= $item['quantidade'] ?></span>
                <span>
                    R$ <?= number_format($item['preco_unitario'] * $item['quantidade'], 2, ',', '.') ?>
                </span>
            </div>
        <?php endwhile; ?>
    <?php else: ?>
        <p>Nenhum item encontrado para este pedido.</p>
    <?php endif; ?>

    <h4 class="mt-4">
        Total: <strong>R$ <?= number_format($pedido['total'], 2, ',', '.') ?></strong>
    </h4>

    <p class="mt-3">Você receberá um email de confirmação em breve.</p>

    <div class="mt-4">
        <button class="btn btn-outline-secondary" onclick="window.print()">
            <i class="fa fa-print"></i> Imprimir Confirmação
        </button>

        <a href="../index.php" class="btn btn-primary ml-2">
            Página principal
        </a>
    </div>
</div>

<!-- ================= RODAPÉ ================= -->
<div class="container-fluid bg-dark text-white mt-5 py-5 px-sm-3 px-md-5">
    <div class="row pt-5">
        <div class="col-lg-4 col-md-12 mb-5">
            <h1 class="mb-3 display-5 text-capitalize text-white">
                <span class="text-primary">Amor</span> Au Pet
            </h1>
            <p class="m-0">
                Fundada em 2022 em Brasília, com o objetivo de levar mais amor, cuidado e bem-estar aos nossos pets.
            </p>
        </div>

        <div class="col-lg-8 col-md-12">
            <div class="row">
                <div class="col-md-4 mb-5">
                    <h5 class="text-primary mb-4">Contatos</h5>
                    <p><i class="fa fa-map-marker-alt mr-2"></i>Universidade Católica de Brasília</p>
                    <p><i class="fa fa-phone-alt mr-2"></i>(61) 9999-9999</p>
                </div>

                <div class="col-md-4 mb-5">
                    <h5 class="text-primary mb-4">Links</h5>
                    <div class="d-flex flex-column justify-content-start">
                        <a class="text-white mb-2" href="./index.php"><i class="fa fa-angle-right mr-2"></i>Principal</a>
                        <a class="text-white mb-2" href="cachorro.php"><i class="fa fa-angle-right mr-2"></i>Cachorros</a>
                        <a class="text-white mb-2" href="gato.php"><i class="fa fa-angle-right mr-2"></i>Gatos</a>
                        <a class="text-white mb-2" href="promocao.php"><i class="fa fa-angle-right mr-2"></i>Promoção</a>
                        <a class="text-white" href="entrar.php"><i class="fa fa-angle-right mr-2"></i>Entrar</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid text-white py-4" style="background:#111;">
    <p class="m-0 text-center">
        &copy; 2025 — Direitos reservados à programadora Izabelle.
    </p>
</div>

<!-- ================= SCRIPTS ================= -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
<script src="../lib/easing/easing.min.js"></script>
<script src="../lib/owlcarousel/owl.carousel.min.js"></script>
<script src="../lib/tempusdominus/js/moment.min.js"></script>
<script src="../lib/tempusdominus/js/moment-timezone.min.js"></script>
<script src="../lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>
<script src="../js/agenda.js"></script>

<?php
$stmt->close();
$conn->close();
?>