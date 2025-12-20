<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8">
    <title>AMOR AU PET</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="./img/favicon.ico">

    <!-- Fontes e ícones -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans&family=Nunito:wght@600;700;800&display=swap" rel="stylesheet"> 
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Bibliotecas -->
    <link href="./lib/flaticon/font/flaticon.css" rel="stylesheet">
    <link href="./lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="./lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- CSS -->
    <link href="./css/style.css" rel="stylesheet">
</head>
<body>

<!-- Cabeçalho -->
<div class="container-fluid">
    <div class="row py-3 px-lg-5">
        <div class="col-lg-4">
            <a href="index.php" class="navbar-brand d-none d-lg-block">
                <h1 class="m-0 display-5 text-capitalize"><span class="text-primary">Amor</span> Au Pet</h1>
            </a>
        </div>
        <div class="col-lg-8 text-center text-lg-right">
            <div class="d-inline-flex align-items-center">
                <div class="d-inline-flex flex-column text-center pr-3 border-right">
                    <h6>Horário de Funcionamento:</h6>
                    <p class="m-0">Das 8h às 22h</p>
                </div>
                <div class="d-inline-flex flex-column text-center pl-3">
                    <h6>Contato:</h6>
                    <p class="m-0">(61) 9999-9999</p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Menu -->
<div class="container-fluid p-0">
    <nav class="navbar navbar-expand-lg bg-dark navbar-dark py-3 py-lg-0 px-lg-5">
        <a href="index.php" class="navbar-brand d-block d-lg-none">
            <h1 class="m-0 display-5 text-capitalize"><span class="text-primary">Amor</span> Au Pet</h1>
        </a>
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-between px-3" id="navbarCollapse">
            <div class="navbar-nav mr-auto py-0">
                <a href="index.php" class="nav-item nav-link active">Principal</a>
                <a href="./php/cachorro.php" class="nav-item nav-link">Cachorros</a>
                <a href="./php/gato.php" class="nav-item nav-link">Gatos</a>
                <a href="./php/promocao.php" class="nav-item nav-link">Promoção</a>
                <a href="#" class="nav-item nav-link">Novidades</a>
                <a href="./php/entrar.php" class="nav-item nav-link">Entrar</a>
                <a href="./php/agenda.php" class="nav-item nav-link">Agende sua visita</a>
            </div>
        </div>
    </nav>
</div>

<!-- Banner -->
<div class="container-fluid p-0">
    <div id="header-carousel" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="w-100" src="./img/feliz.jpg" alt="Pet feliz">
                <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                    <div class="p-3" style="max-width: 900px;">
                        <h1 class="display-3 text-white mb-3">Mantenha seu animal de estimação feliz</h1>
                        <h5 class="text-white mb-3 d-none d-sm-block">Os melhores serviços para o cuidado do seu pet</h5>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img class="w-100" src="./img/dogthuck.jpg" alt="Dog Truck">
                <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                    <div class="p-3" style="max-width: 900px;">
                        <h1 class="display-3 text-white mb-3">Vamos até você com o Dog Truck</h1>
                    </div>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#header-carousel" data-slide="prev">
            <div class="btn btn-primary rounded" style="width: 45px; height: 45px;">
                <span class="carousel-control-prev-icon mb-n2"></span>
            </div>
        </a>
        <a class="carousel-control-next" href="#header-carousel" data-slide="next">
            <div class="btn btn-primary rounded" style="width: 45px; height: 45px;">
                <span class="carousel-control-next-icon mb-n2"></span>
            </div>
        </a>
    </div>
</div>

<!-- Serviços Básicos -->
<section class="servicos-basicos bg-light py-5">
    <div class="container">
        <header class="text-center mb-5">
            <h4 class="text-secondary mb-3">Nossos Serviços</h4>
            <h1 class="display-4 m-0"><span class="text-primary">Serviços</span> Básicos</h1>
        </header>
        <div class="row g-4">
            <div class="col-md-6 col-lg-4">
                <article class="card-servico text-center bg-white p-4 h-100">
                    <img src="./img/vacina.jpg" alt="Vacinação de pet" class="img-fluid rounded mb-3">
                    <h3 class="mb-3">Vacinação</h3>
                    <p>Temos todos os tipos de vacinas para a proteção do seu pet.</p>
                </article>
            </div>
            <div class="col-md-6 col-lg-4">
                <article class="card-servico text-center bg-white p-4 h-100">
                    <img src="./img/banho.jpg" alt="Banho e tosa" class="img-fluid rounded mb-3">
                    <h3 class="mb-3">Banho e Tosa</h3>
                    <p>Banho com carinho, cuidado e preço justo.</p>
                </article>
            </div>
            <div class="col-md-6 col-lg-4">
                <article class="card-servico text-center bg-white p-4 h-100">
                    <img src="./img/lojinha.png" alt="Lojinha pet" class="img-fluid rounded mb-3">
                    <h3 class="mb-3">Lojinha</h3>
                    <p>Grande variedade de produtos para o seu pet.</p>
                </article>
            </div>
        </div>
    </div>
</section>

<!-- Planos -->
<div class="container-fluid bg-light pt-5 pb-4">
    <div class="container py-5">
        <div class="text-center mb-5">
            <h4 class="text-secondary mb-3">Nossos Planos</h4>
            <h1 class="display-4 m-0">Escolha o <span class="text-primary">Melhor</span> Preço</h1>
        </div>
        <div class="row">
            <div class="col-lg-4 mb-4">
                <div class="card border-0">
                    <img class="card-img-top" src="./img/premio-ouro.png" alt="Plano Ouro">
                    <div class="card-body text-center">
                        <h3 class="text-primary">Plano Ouro</h3>
                        <h2>R$ 50,00 / mês</h2>
                        <a href="#" class="btn btn-primary btn-block mt-3">Vamos adquirir</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 mb-4">
                <div class="card border-0">
                    <img class="card-img-top" src="./img/premio-prata.jpg" alt="Plano Prata">
                    <div class="card-body text-center">
                        <h3 class="text-secondary">Plano Prata</h3>
                        <h2>R$ 100,00 / mês</h2>
                        <a href="#" class="btn btn-secondary btn-block mt-3">Vamos adquirir</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 mb-4">
                <div class="card border-0">
                    <img class="card-img-top" src="./img/premio-bronze.png" alt="Plano Bronze">
                    <div class="card-body text-center">
                        <h3 class="text-primary">Plano Bronze</h3>
                        <h2>R$ 150,00 / mês</h2>
                        <a href="#" class="btn btn-primary btn-block mt-3">Vamos adquirir</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Localidade -->
<div class="container pt-5">
    <div class="text-center mb-5">
        <h1 class="display-4 m-0"><span class="text-primary">Nossa</span> Localidade</h1>
    </div>
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3837.838002647485!2d-48.03232648514426!3d-15.86510938900733!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x935a2d97a15b0507%3A0x3c3e4472ee75d834!2sUniversidade%20Cat%C3%B3lica%20de%20Bras%C3%ADlia!5e0!3m2!1spt-BR!2sbr!4v1663353137768!5m2!1spt-BR!2sbr" style="border:0; width:100%; height:450px;" allowfullscreen loading="lazy"></iframe>
</div>

<!-- Rodapé -->
<div class="container-fluid bg-dark text-white mt-5 py-5 px-sm-3 px-md-5">
    <div class="container text-center">
        <p class="m-0">&copy; Direitos reservados à programadora Izabelle.</p>
    </div>
</div>

<a href="#" class="btn btn-lg btn-primary back-to-top"><i class="fa fa-angle-double-up"></i></a>

<!-- Scripts -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
<script src="./lib/easing/easing.min.js"></script>
<script src="./lib/owlcarousel/owl.carousel.min.js"></script>
<script src="./lib/tempusdominus/js/moment.min.js"></script>
<script src="./lib/tempusdominus/js/moment-timezone.min.js"></script>
<script src="./lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>
<script src="./js/main.js"></script>

</body>
</html>
