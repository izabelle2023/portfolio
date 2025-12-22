<?php
session_start();

// Simulação de login (remova isso em produção)
if (!isset($_SESSION['usuario'])) {
    $_SESSION['usuario'] = null; // ou defina como o nome do usuário após login
}

// Lista de produtos
$produtos = [
  ['id' => 15, 'nome' => 'Gaiola 1', 'descricao' => 'Gaiola para pequenos animais', 'preco' => 129.90, 'imagem' => '../img/gai1.jpg', 'categoria' => 'Gato', 'criado_em' => '2015-09-04 11:15:15', 'estoque' => 30],
  ['id' => 16, 'nome' => 'Gaiola 2', 'descricao' => 'Comedouro e bebedouro inclusos', 'preco' => 119.90, 'imagem' => '../img/gai2.jpg', 'categoria' => 'Gato', 'criado_em' => '2015-09-04 11:15:15', 'estoque' => 25],
  ['id' => 17, 'nome' => 'Gaiola 3', 'descricao' => 'Ideal para transporte', 'preco' => 139.90, 'imagem' => '../img/gai3.jpg', 'categoria' => 'Gato', 'criado_em' => '2015-09-04 11:15:15', 'estoque' => 20],
  ['id' => 18, 'nome' => 'Gaiola 4', 'descricao' => 'Porta com trava de segurança', 'preco' => 149.90, 'imagem' => '../img/gai4.jpg', 'categoria' => 'Gato', 'criado_em' => '2015-09-04 11:15:15', 'estoque' => 15],
  ['id' => 19, 'nome' => 'Gaiola 5', 'descricao' => 'Fácil de limpar', 'preco' => 159.90, 'imagem' => '../img/gai5.jpg', 'categoria' => 'Gato', 'criado_em' => '2015-09-04 11:15:15', 'estoque' => 10],
  ['id' => 20, 'nome' => 'Gaiola 6', 'descricao' => 'Design compacto', 'preco' => 169.90, 'imagem' => '../img/gai6.jpg', 'categoria' => 'Gato', 'criado_em' => '2015-09-04 11:15:15', 'estoque' => 5],
  ['id' => 21, 'nome' => 'Racao Gato 1', 'descricao' => 'Fórmula balanceada para gatos adultos sabor salmão', 'preco' => 89.90, 'imagem' => '../img/racao_gato_1.jpeg', 'categoria' => 'Gato', 'criado_em' => '2015-09-04 11:15:15', 'estoque' => 50],
  ['id' => 22, 'nome' => 'Racao Gato 2', 'descricao' => 'Fórmula balanceada com taurina e ômega 3', 'preco' => 79.90, 'imagem' => '../img/racao_gato_2.jpg', 'categoria' => 'Gato', 'criado_em' => '2015-09-04 11:15:15', 'estoque' => 45],
  ['id' => 23, 'nome' => 'Racao Gato 3', 'descricao' => 'Sabor frango com arroz, ideal para digestão', 'preco' => 74.90, 'imagem' => '../img/racao_gato_3.jpeg', 'categoria' => 'Gato', 'criado_em' => '2015-09-04 11:15:15', 'estoque' => 40],
  ['id' => 24, 'nome' => 'Racao Gato 4', 'descricao' => 'Ração premium para gatos castrados com controle de peso', 'preco' => 94.90, 'imagem' => '../img/racao_gato_4.jpeg', 'categoria' => 'Gato', 'criado_em' => '2015-09-04 11:15:15', 'estoque' => 35],
  ['id' => 25, 'nome' => 'Racao Gato 5', 'descricao' => 'Ração hipoalergênica para gatos exigentes', 'preco' => 99.90, 'imagem' => '../img/racao_gato_5.jpeg', 'categoria' => 'Gato', 'criado_em' => '2015-09-04 11:15:15', 'estoque' => 30],
  ['id' => 26, 'nome' => 'Racao Gato 6', 'descricao' => 'Sabor frango com arroz, ideal para digestão', 'preco' => 74.90, 'imagem' => '../img/racao_gato_6.jpeg', 'categoria' => 'Gato', 'criado_em' => '2015-09-04 11:15:15', 'estoque' => 40],
  ['id' => 27, 'nome' => 'Racao Gato 7', 'descricao' => 'Ração premium para gatos castrados com controle de peso', 'preco' => 94.90, 'imagem' => '../img/racao_gato_7.jpeg', 'categoria' => 'Gato', 'criado_em' => '2015-09-04 11:15:15', 'estoque' => 35],
  ['id' => 28, 'nome' => 'Racao Gato 8', 'descricao' => 'Ração hipoalergênica para gatos exigentes', 'preco' => 99.90, 'imagem' => '../img/racao_gato_8.jpeg', 'categoria' => 'Gato', 'criado_em' => '2015-09-04 11:15:15', 'estoque' => 30]
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
  <h1 class="mb-4">🐱 Produtos para Gatos</h1>

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