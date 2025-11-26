<head>
    <meta charset="utf-8">
    <title>AMOR AU PET</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <link href="./img/favicon.ico" rel="icon">

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
                        <a href="./php/cachorro.php" class="nav-item nav-link">Cachorros</a>       
                    </div>  
                        <a href="./php/gato.php" class="nav-item nav-link">Gatos</a>  
                        <a href="#" class="nav-item nav-link">Promoção</a>                  
                        <a href="#" class="nav-item nav-link">Novidades</a>
                        <a href="./php/entrar.php" class="nav-item nav-link">Entrar</a>
                        <a href="./php/agenda.php" class="nav-item nav-link">Agenda sua visita</a>                                     
                </div>              
            </div>
        </nav>
    </div>
    </div>

    <!-- Banner -->
    <div class="container-fluid p-0">
        <div id="header-carousel" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="./img/feliz.jpg" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h1 class="display-3 text-white mb-3">Mantenha seu animal de estimação feliz</h1>
                            <h5 class="text-white mb-3 d-none d-sm-block">Com os melhores serviços para o cuidado do seu pet</h5>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="./img/dogthuck.png" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h1 class="display-3 text-white mb-3">Vamos até você com os serviços de Dog truck</h1>
                            <h5 class="text-white mb-3 d-none d-sm-block"></h5>
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
                <h1 class="display-4 m-0">
                    <span class="text-primary">Serviços</span> Básicos
                </h1>
                </header>

                <div class="row g-4">
                <!-- Vacinação -->
                <div class="col-md-6 col-lg-4">
                    <article class="card-servico text-center bg-white p-4 h-100">
                    <img src="./img/vacina.jpg" alt="Vacinação de pet" class="img-fluid rounded mb-3">
                    <h3 class="mb-3">Vacinação</h3>
                    <p>Melhor que fazer seu pet feliz, é saber que temos todos os tipos de vacinas para a proteção dele.</p>
                    </article>
                </div>

                <!-- Banho e Tosa -->
                <div class="col-md-6 col-lg-4">
                    <article class="card-servico text-center bg-white p-4 h-100">
                    <img src="./img/banho.jpg" alt="Banho e tosa em pet" class="img-fluid rounded mb-3">
                    <h3 class="mb-3">Banho e Tosa</h3>
                    <p>Banho é bom, mas com desconto e amor é melhor ainda.</p>
                    </article>
                </div>

                <!-- Lojinhas -->
                <div class="col-md-6 col-lg-4">
                    <article class="card-servico text-center bg-white p-4 h-100">
                    <img src="./img/lojinha.png" alt="Lojinha de produtos para pets" class="img-fluid rounded mb-3">
                    <h3 class="mb-3">Lojinhas</h3>
                    <p>Temos uma grande variedade na nossa lojinha, desde alimentação até a proteção dos nossos pets.</p>
                    </article>
                </div>
                </div>
            </div>
        </section>

    <!--Planos-->
    <div class="container-fluid bg-light pt-5 pb-4">
        <div class="container py-5">
            <div class="d-flex flex-column text-center mb-5">
                <h4 class="text-secondary mb-3">Nossos Planos</h4>
                <h1 class="display-4 m-0">Escolha o <span class="text-primary"> Melhor</span> Preço</h1>
            </div>
            <div class="row">
                <div class="col-lg-4 mb-4">
                    <div class="card border-0">
                        <div class="card-header position-relative border-0 p-0 mb-4">
                            <img class="card-img-top" src="./img/premio-ouro.png" alt="">
                            <div class="position-absolute d-flex flex-column align-items-center justify-content-center w-100 h-100" style="top: 0; left: 0; z-index: 1; background: rgba(0, 0, 0, .5);">
                                <h3 class="text-primary mb-3">Plano Ouro</h3>
                                <h1 class="display-4 text-white mb-0">
                                    <small class="align-top" style="font-size: 22px; line-height: 45px;">R$ </small>50,00<small class="align-bottom" style="font-size: 16px; line-height: 40px;">/ mensal</small>
                                </h1>
                            </div>
                        </div>
                        <div class="card-body text-center p-0">
                            <ul class="list-group list-group-flush mb-4">
                                <li class="list-group-item p-2"><i class="fa fa-check text-secondary mr-2"></i>Alimentação</li>
                                <li class="list-group-item p-2"><i class="fa fa-check text-secondary mr-2"></i>Banho e tosa</li>
                                <li class="list-group-item p-2"><i class="fa fa-times text-danger mr-2"></i>Vacinação</li>
                                <li class="list-group-item p-2"><i class="fa fa-times text-danger mr-2"></i>Caixa Surpresa</li>
                            </ul>
                        </div>
                        <div class="card-footer border-0 p-0">
                            <a href="" class="btn btn-primary btn-block p-3" style="border-radius: 0;">Vamos Adiquirir</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-4">
                    <div class="card border-0">
                        <div class="card-header position-relative border-0 p-0 mb-4">
                            <img class="card-img-top" src="./img/premio-prata.jpg" alt="">
                            <div class="position-absolute d-flex flex-column align-items-center justify-content-center w-100 h-100" style="top: 0; left: 0; z-index: 1; background: rgba(0, 0, 0, .5);">
                                <h3 class="text-secondary mb-3">Plano Prata</h3>
                                <h1 class="display-4 text-white mb-0">
                                    <small class="align-top" style="font-size: 22px; line-height: 45px;">R$ </small>100,00<small class="align-bottom" style="font-size: 16px; line-height: 40px;">/ mensal</small>
                                </h1>
                            </div>
                        </div>
                        <div class="card-body text-center p-0">
                            <ul class="list-group list-group-flush mb-4">
                                <li class="list-group-item p-2"><i class="fa fa-check text-secondary mr-2"></i>Alimentação</li>
                                <li class="list-group-item p-2"><i class="fa fa-check text-secondary mr-2"></i>Banho e tosa</li>
                                <li class="list-group-item p-2"><i class="fa fa-check text-secondary mr-2"></i>Vacinação</li>
                                <li class="list-group-item p-2"><i class="fa fa-times text-danger mr-2"></i>Caixa Surpresa</li>
                            </ul>
                        </div>
                        <div class="card-footer border-0 p-0">
                            <a href="" class="btn btn-secondary btn-block p-3" style="border-radius: 0;">Vamos adiquirir</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-4">
                    <div class="card border-0">
                        <div class="card-header position-relative border-0 p-0 mb-4">
                            <img class="card-img-top" src="./img/premio-bronze.png" alt="">
                            <div class="position-absolute d-flex flex-column align-items-center justify-content-center w-100 h-100" style="top: 0; left: 0; z-index: 1; background: rgba(0, 0, 0, .5);">
                                <h3 class="text-primary mb-3">Plano Bronze</h3>
                                <h1 class="display-4 text-white mb-0">
                                    <small class="align-top" style="font-size: 22px; line-height: 45px;">R$</small>150,00<small class="align-bottom" style="font-size: 16px; line-height: 40px;">/ mensal</small>
                                </h1>
                            </div>
                        </div>
                        <div class="card-body text-center p-0">
                            <ul class="list-group list-group-flush mb-4">
                                <li class="list-group-item p-2"><i class="fa fa-check text-secondary mr-2"></i>Alimentação</li>
                                <li class="list-group-item p-2"><i class="fa fa-check text-secondary mr-2"></i>Banho e tosa</li>
                                <li class="list-group-item p-2"><i class="fa fa-check text-secondary mr-2"></i>Vacinação</li>
                                <li class="list-group-item p-2"><i class="fa fa-check text-secondary mr-2"></i>Caixa Surpresa</li>
                            </ul>
                        </div>
                        <div class="card-footer border-0 p-0">
                            <a href="" class="btn btn-primary btn-block p-3" style="border-radius: 0;">V</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--Localidade-->
    <div class="container pt-5">
        <div class="d-flex flex-column text-center mb-5">
            <h1 class="display-4 m-0"><span class="text-primary">Nossa </span> Localidade:</h1>
        </div>
        <div class="row pb-3">

            <div class="col-lg-4 mb-4">
                <div class="card border-0 mb-2">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3837.838002647485!2d-48.03232648514426!3d-15.86510938900733!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x935a2d97a15b0507%3A0x3c3e4472ee75d834!2sUniversidade%20Cat%C3%B3lica%20de%20Bras%C3%ADlia%20-%20C%C3%A2mpus%20Taguatinga!5e0!3m2!1spt-BR!2sbr!4v1663353137768!5m2!1spt-BR!2sbr" width="900" height="450"  style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </div>

    <!--Rodapé-->
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
                            <a class="text-white" href="#"><i class="fa fa-angle-right mr-2"></i>Entrar</a>
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
                    &copy; <a class="text-white font-weight-bold"></a>Direitos Reservados a programadora Izabelle.
                </p>
            </div>
        </div>
    </div>

    <a href="#" class="btn btn-lg btn-primary back-to-top"><i class="fa fa-angle-double-up"></i></a>

    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="./lib/easing/easing.min.js"></script>
    <script src="./lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="./lib/tempusdominus/js/moment.min.js"></script>
    <script src="./lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="./lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>
    <script src="./mail/jqBootstrapValidation.min.js"></script>
    <script src="./mail/contact.js"></script>
    <script src="./js/main.js"></script>
</body>

</html>
<?php