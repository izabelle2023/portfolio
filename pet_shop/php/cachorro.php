<?php
session_start();

// Simulação de login (remova isso em produção)
if (!isset($_SESSION['usuario'])) {
    $_SESSION['usuario'] = null; // ou defina como o nome do usuário após login
}

// Lista de produtos
$produtos = [
  // Brinquedos Mordedores
  ['id' => 1, 'nome' => 'Brinquedo Mordedor 1', 'descricao' => 'Diversão garantida para seu pet', 'preco' => 19.90, 'imagem' => '../img/brinq1.jpg', 'categoria' => 'Cachorro', 'criado_em' => '2025-09-04 11:55:00', 'estoque' => 115],
  ['id' => 2, 'nome' => 'Brinquedo Mordedor 2', 'descricao' => 'Estimula o raciocínio do animal', 'preco' => 22.90, 'imagem' => '../img/brinq2.jpg', 'categoria' => 'Cachorro', 'criado_em' => '2025-09-04 11:55:00', 'estoque' => 115],
  ['id' => 3, 'nome' => 'Brinquedo Mordedor 3', 'descricao' => 'Colorido e resistente', 'preco' => 24.90, 'imagem' => '../img/brinq3.jpg', 'categoria' => 'Cachorro', 'criado_em' => '2025-09-04 11:55:00', 'estoque' => 115],
  ['id' => 4, 'nome' => 'Brinquedo Mordedor 4', 'descricao' => 'Feito com material atóxico', 'preco' => 21.90, 'imagem' => '../img/brinq4.jpg', 'categoria' => 'Cachorro', 'criado_em' => '2025-09-04 11:55:00', 'estoque' => 115],
  ['id' => 5, 'nome' => 'Brinquedo Mordedor 5', 'descricao' => 'Horas de diversão', 'preco' => 19.90, 'imagem' => '../img/brinq5.jpg', 'categoria' => 'Cachorro', 'criado_em' => '2025-09-04 11:55:00', 'estoque' => 115],
  ['id' => 6, 'nome' => 'Brinquedo Mordedor 6', 'descricao' => 'Ajuda no desenvolvimento motor', 'preco' => 22.90, 'imagem' => '../img/brinq6.jpg', 'categoria' => 'Cachorro', 'criado_em' => '2025-09-04 11:55:00', 'estoque' => 115],
  ['id' => 7, 'nome' => 'Brinquedo Mordedor 7', 'descricao' => 'Fortalece a mandíbula', 'preco' => 24.90, 'imagem' => '../img/brinq7.jpg', 'categoria' => 'Cachorro', 'criado_em' => '2025-09-04 11:55:00', 'estoque' => 115],
  ['id' => 8, 'nome' => 'Brinquedo Mordedor 8', 'descricao' => 'Para pets de todos os tamanhos', 'preco' => 21.90, 'imagem' => '../img/brinq8.jpg', 'categoria' => 'Cachorro', 'criado_em' => '2025-09-04 11:55:00', 'estoque' => 115],

  // Caminhas
  ['id' => 9, 'nome' => 'Caminha 1', 'descricao' => 'Tecido antialérgico e lavável', 'preco' => 49.90, 'imagem' => '../img/caminha1.jpg', 'categoria' => 'Cachorro', 'criado_em' => '2025-09-04 11:55:00', 'estoque' => 50],
  ['id' => 10, 'nome' => 'Caminha 2', 'descricao' => 'Enchimento de espuma', 'preco' => 59.90, 'imagem' => '../img/caminha2.jpg', 'categoria' => 'Cachorro', 'criado_em' => '2025-09-04 11:55:00', 'estoque' => 50],
  ['id' => 11, 'nome' => 'Caminha 3', 'descricao' => 'Ideal para ambientes internos', 'preco' => 39.90, 'imagem' => '../img/caminha3.jpg', 'categoria' => 'Cachorro', 'criado_em' => '2025-09-04 11:55:00', 'estoque' => 50],
  ['id' => 12, 'nome' => 'Caminha 4', 'descricao' => 'Alta durabilidade', 'preco' => 44.90, 'imagem' => '../img/caminha4.jpg', 'categoria' => 'Cachorro', 'criado_em' => '2025-09-04 11:55:00', 'estoque' => 50],

  // Grades de proteção
  ['id' => 13, 'nome' => 'Grade 1', 'descricao' => 'Grade de proteção para pets', 'preco' => 29.90, 'imagem' => '../img/grade1.jpg', 'categoria' => 'Cachorro', 'criado_em' => '2025-09-04 11:55:00', 'estoque' => 40],
  ['id' => 14, 'nome' => 'Grade 2', 'descricao' => 'Instalação simples e segura', 'preco' => 39.90, 'imagem' => '../img/grade2.jpg', 'categoria' => 'Cachorro', 'criado_em' => '2025-09-04 11:55:00', 'estoque' => 40],
  ['id' => 15, 'nome' => 'Grade 3', 'descricao' => 'Grade de proteção para pets', 'preco' => 29.90, 'imagem' => '../img/grade3.jpg', 'categoria' => 'Cachorro', 'criado_em' => '2025-09-04 11:55:00', 'estoque' => 40],
  ['id' => 16, 'nome' => 'Grade 4', 'descricao' => 'Instalação simples e segura', 'preco' => 39.90, 'imagem' => '../img/grade4.jpg', 'categoria' => 'Cachorro', 'criado_em' => '2025-09-04 11:55:00', 'estoque' => 40],
  ['id' => 17, 'nome' => 'Grade 5', 'descricao' => 'Instalação simples e segura', 'preco' => 39.90, 'imagem' => '../img/grade5.jpg', 'categoria' => 'Cachorro', 'criado_em' => '2025-04-09 11:55:15', 'estoque' => 80],
  ['id' => 18, 'nome' => 'Grade 6', 'descricao' => 'Grade de proteção para pets', 'preco' => 29.90, 'imagem' => '../img/grade6.jpg', 'categoria' => 'Cachorro', 'criado_em' => '2025-04-09 11:55:15', 'estoque' => 80],
  ['id' => 19, 'nome' => 'Grade 7', 'descricao' => 'Instalação simples e segura', 'preco' => 39.90, 'imagem' => '../img/grade7.jpg', 'categoria' => 'Cachorro', 'criado_em' => '2025-04-09 11:55:15', 'estoque' => 80],
  ['id' => 20, 'nome' => 'Grade 8', 'descricao' => 'Grade de proteção para pets', 'preco' => 29.90, 'imagem' => '../img/grade8.jpg', 'categoria' => 'Cachorro', 'criado_em' => '2025-04-09 11:55:15', 'estoque' => 80],

  // Rações
  ['id' => 21, 'nome' => 'Racao 1', 'descricao' => 'Delicioso para o nosso pet', 'preco' => 89.90, 'imagem' => '../img/racao_1.png', 'categoria' => 'Cachorro', 'criado_em' => '2025-04-09 11:55:15', 'estoque' => 80],
  ['id' => 22, 'nome' => 'Racao 2', 'descricao' => 'Ração premium com ingredientes naturais', 'preco' => 94.90, 'imagem' => '../img/racao_2.png', 'categoria' => 'Cachorro', 'criado_em' => '2025-04-09 11:55:15', 'estoque' => 80],
   ['id' => 23, 'nome' => 'Racao 3', 'descricao' => 'Ideal para cães adultos com alta energia', 'preco' => 99.90, 'imagem' => '../img/racao_3.png', 'categoria' => 'Cachorro', 'criado_em' => '2025-04-09 11:55:15', 'estoque' => 80],
  ['id' => 24, 'nome' => 'Racao 4', 'descricao' => 'Ração com ômega 3 e 6 para pele saudável', 'preco' => 89.90, 'imagem' => '../img/racao_4.png', 'categoria' => 'Cachorro', 'criado_em' => '2025-04-09 11:55:15', 'estoque' => 80],
  ['id' => 25, 'nome' => 'Racao 5', 'descricao' => 'Sabor carne com vegetais para cães exigentes', 'preco' => 94.90, 'imagem' => '../img/racao_5.png', 'categoria' => 'Cachorro', 'criado_em' => '2025-04-09 11:55:15', 'estoque' => 80],
  ['id' => 26, 'nome' => 'Racao 6', 'descricao' => 'Ração para filhotes com fórmula balanceada', 'preco' => 99.90, 'imagem' => '../img/racao_6.png', 'categoria' => 'Cachorro', 'criado_em' => '2025-04-09 11:55:15', 'estoque' => 80],
  ['id' => 27, 'nome' => 'Racao 7', 'descricao' => 'Ração hipoalergênica para cães sensíveis', 'preco' => 94.90, 'imagem' => '../img/racao_7.png', 'categoria' => 'Cachorro', 'criado_em' => '2025-04-09 11:55:15', 'estoque' => 80],
  ['id' => 28, 'nome' => 'Racao 8', 'descricao' => 'Ração com probióticos para digestão saudável', 'preco' => 89.90, 'imagem' => '../img/racao_8.png', 'categoria' => 'Cachorro', 'criado_em' => '2025-04-09 11:55:15', 'estoque' => 80],
  ['id' => 29, 'nome' => 'Racao 9', 'descricao' => 'Ração econômica com ótimo valor nutricional', 'preco' => 79.90, 'imagem' => '../img/racao_9.png', 'categoria' => 'Cachorro', 'criado_em' => '2025-04-09 11:55:15', 'estoque' => 80],
  ];

if (!isset($_SESSION['carrinho'])) {
  $_SESSION['carrinho'] = [];
}

$mensagem = null;

// Adiciona ao carrinho
if (isset($_GET['adicionar'])) {
  $id = intval($_GET['adicionar']);
  $produto = array_filter($produtos, fn($p) => $p['id'] === $id);
  $produto = reset($produto);

  if ($produto) {
    if ($produto['estoque'] > 0) {
      if (isset($_SESSION['carrinho'][$id])) {
        $_SESSION['carrinho'][$id]['quantidade']++;
      } else {
        $_SESSION['carrinho'][$id] = [
          'nome' => $produto['nome'],
          'preco' => $produto['preco'],
          'quantidade' => 1
        ];
      }
      $mensagem = ['tipo' => 'sucesso', 'texto' => "{$produto['nome']} foi adicionado ao carrinho!"];
    } else {
      $mensagem = ['tipo' => 'erro', 'texto' => "{$produto['nome']} está fora de estoque."];
    }
  }
}
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

<div class="container mt-4">
  <h1 class="mb-4">🐱 Produtos para Cachorro</h1>

  <?php if ($mensagem): ?>
    <div class="mensagem <?php echo $mensagem['tipo']; ?>">
      <?php echo $mensagem['texto']; ?>
    </div>
  <?php endif; ?>

  <div class="row">
    <?php foreach ($produtos as $p): ?>
      <div class="col-md-3 mb-4">
        <div class="card h-100">
          <img src="<?php echo $p['imagem']; ?>" class="card-img-top" alt="<?php echo $p['nome']; ?>">
          <div class="card-body">
            <h5 class="card-title"><?php echo $p['nome']; ?></h5>
            <p class="card-text">Preço: R$ <?php echo number_format($p['preco'], 2, ',', '.'); ?></p>
            <p class="card-text">
              <?php echo $p['estoque'] > 0 ? "Estoque: {$p['estoque']} unidades" : "<span style='color:red;'>Esgotado</span>"; ?>
            </p>
            <form method="get">
              <input type="hidden" name="adicionar" value="<?php echo $p['id']; ?>">
              <button type="submit" class="btn btn-primary btn-block" <?php echo $p['estoque'] == 0 ? 'disabled' : ''; ?>>
                Adicionar
              </button>
            </form>
          </div>
        </div>
      </div>
    <?php endforeach; ?>
  </div>

  <div class="mt-4">
    <?php if ($_SESSION['usuario']): ?>
      <a href="carrinho.php" class="btn btn-success">🛒 Ver Carrinho</a>
    <?php else: ?>
      <p><a href="entrar.php" class="btn btn-warning">🔒 Faça login para acessar o carrinho</a></p>
    <?php endif; ?>
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
</body>
</html>