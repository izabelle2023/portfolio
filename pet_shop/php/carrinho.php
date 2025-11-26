<?php
session_start();
$carrinho = $_SESSION['carrinho'] ?? [];
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
    <link href="../css/style.css" rel="stylesheet">
    <link href="../css/carrinho.css" rel="stylesheet">

</head>
<body>

   <!-- Cabeçalho -->
   <!-- Cabeçalho -->
    <div class="container-fluid">
        <div class="row py-3 px-lg-5">
            <div class="col-lg-4">
                <a href="" class="navbar-brand d-none d-lg-block">
                    <h1 class="m-0 display-5 text-capitalize"><span class="text-primary">Amor</span> Au Pet</h1>
                </a>
            </div>
            <div class="col-lg-8 text-center text-lg-right">
                <div class="d-inline-flex align-items-center">
                    <div class="d-inline-flex flex-column text-center pr-3 border-right">
                        <h6>Horario de Funcionamento:</h6>
                        <p class="m-0">Das 8hs ás 22hs</p>
                    </div>

                    <div class="d-inline-flex flex-column text-center pl-3">
                        <h6>Contato:</h6>
                        <p class="m-0">(61)9999-9999</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Menu -->
     <!-- Menu -->
      <div class="container-fluid p-0">
        <nav class="navbar navbar-expand-lg bg-dark navbar-dark py-3 py-lg-0 px-lg-5">
            <a href="" class="navbar-brand d-block d-lg-none">
                <h1 class="m-0 display-5 text-capitalize"><span class="text-primary">Amor</span> Au Pet</h1>
            </a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-between px-3" id="navbarCollapse">
                <div class="navbar-nav mr-auto py-0">
                    <a href="index.php" class="nav-item nav-link active">Principal</a>
                    <div class="nav-item dropdown">
                        <a href="../php/gato.php" class="nav-item nav-link">Gato</a>   
                    </div>  
                    
                        <a href="../php/cachorro.php" class="nav-item nav-link">Cachorro</a>    
                        <a href="#" class="nav-item nav-link">Promoção</a>                  
                        <a href="#" class="nav-item nav-link">Novidades</a>
                        <a href="entrar.php" class="nav-item nav-link">Entrar</a>
                        <a href="agenda.php" class="nav-item nav-link">Agenda sua visita</a>                                     
                </div>              
            </div>
        </nav>
    </div>
    <!-- Fim do Menu -->


  <!-- Conteúdo do Carrinho -->
  <h1>🛒 Seu Carrinho</h1>

  <a href="gato.php" class="voltar">← Voltar para Produtos</a>
  <a href="checkout.php" class="checkout">Ir para Checkout →</a>

  <?php if (!empty($carrinho)): ?>
    <?php $total = 0; ?>
    <?php foreach ($carrinho as $item): ?>
      <div class="item">
        <h3><?php echo $item['nome']; ?></h3>
        <p>Quantidade: <?php echo $item['quantidade']; ?></p>
        <p>Preço unitário: R$ <?php echo number_format($item['preco'], 2, ',', '.'); ?></p>
        <p>Subtotal: R$ <?php echo number_format($item['preco'] * $item['quantidade'], 2, ',', '.'); ?></p>
      </div>
      <?php $total += $item['preco'] * $item['quantidade']; ?>
    <?php endforeach; ?>
    <div class="total">Total: R$ <?php echo number_format($total, 2, ',', '.'); ?></div>
  <?php else: ?>
    <p>Seu carrinho está vazio.</p>
  <?php endif; ?>

   <!-- Rodapé -->
    <div class="container-fluid bg-dark text-white mt-5 py-5 px-sm-3 px-md-5">
        <div class="row pt-5">
            <div class="col-lg-4 col-md-12 mb-5">
                <h1 class="mb-3 display-5 text-capitalize text-white"><span class="text-primary">Amor</span>Au pet</h1>
                <p class="m-0">Fundada em 2022 em Brasilia, com objetivo de trazer mais amor e felicidade para os nossos pets, com grande diversidades de produtos e carinhos. Hoje, O amor au pet, está com uma ação de ir até você para cuidar do nossos filhotes.
            </div>
            <div class="col-lg-8 col-md-12">
                <div class="row">
                    <div class="col-md-4 mb-5">
                        <h5 class="text-primary mb-4">Contatos</h5>
                        <p><i class="fa fa-map-marker-alt mr-2"></i>Universidade Católica de Brasília</p>
                        <p><i class="fa fa-phone-alt mr-2"></i>(61)9999-9999</p>
                    </div>
                    <div class="col-md-4 mb-5">
                        <h5 class="text-primary mb-4">Popular Links</h5>
                        <div class="d-flex flex-column justify-content-start">
                            <a class="text-white mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Principal</a>
                            <a class="text-white mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Cachorro</a>
                            <a class="text-white mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Gato</a>
                            <a class="text-white mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Pássaro</a>
                            <a class="text-white" href="#"><i class="fa fa-angle-right mr-2"></i>Novidades</a>
                            <a class="text-white" href="#"><i class="fa fa-angle-right mr-2"></i>Promoção</a>
                        </div>                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid text-white py-4 px-sm-3 px-md-5" style="background: #111111;">
        <div class="row">
            <div class="col-md-6 text-center text-md-left mb-3 mb-md-0">
                <p class="m-0 text-white">
                    &copy; <a class="text-white font-weight-bold"></a>Direitos reservados Direitos Reservados a programadora Izabelle.
                </p>
            </div>
        </div>
    </div>

    <!-- JavaScript -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="../lib/easing/easing.min.js"></script>
    <script src="../lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="../lib/tempusdominus/js/moment.min.js"></script>
    <script src="../lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="../lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>
    <script src="../js/carrinho.js"></script>  
</body>
</html>