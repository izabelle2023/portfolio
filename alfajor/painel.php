<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

require_once 'verifica_login.php';

if (!isset($_SESSION['nome'])) {
    header('Location: index.php');
    exit;
}
?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>UNIVERSO DE ALFAJOR</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="css/bootstrap.css">

    <link href="https://fonts.googleapis.com/css?family=Dosis:400,500|Poppins:400,600,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">
</head>

<body>

<div class="hero_area">
    <header class="header_section">
        <div class="container-fluid">
            <nav class="navbar navbar-expand-lg custom_nav-container">
                <a class="navbar-brand" href="index.php">
                    <img src="./images/logo.png" alt="Logo">
                </a>

                <div class="ml-auto d-flex align-items-center">
                    <h5 class="mr-3 mb-0">
                        Olá, <?= htmlspecialchars($_SESSION['nome']) ?>
                    </h5>
                    <a href="logout.php" class="btn btn-danger btn-sm">Sair</a>
                </div>
            </nav>
        </div>
    </header>

    <section class="slider_section position-relative">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">

            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            </ol>

            <div class="carousel-inner">

                <div class="carousel-item active">
                    <div class="row">
                        <div class="col-md-3 offset-md-2">
                            <div class="slider_detail">
                                <h1>
                                    Diversidade de
                                    <span>Sabores</span>
                                </h1>
                                <p>
                                    Você não pode comprar felicidade, mas pode comprar brigadeiro gourmet que é quase a mesma coisa.
                                </p>
                            </div>
                        </div>
                        <div class="col-md-7">
                            <div class="slider_img-box">
                                <img src="images/topo.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="carousel-item">
                    <div class="row">
                        <div class="col-md-3 offset-md-2">
                            <div class="slider_detail">
                                <h1>
                                    Diversidade de
                                    <span>Sabores</span>
                                </h1>
                                <p>
                                    Para você que está pensando só em política, venho dizer que meus doces gourmets são um ótimo partido.
                                </p>
                            </div>
                        </div>
                        <div class="col-md-7">
                            <div class="slider_img-box">
                                <img src="images/topo2.webp" alt="">
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <div class="carousel_btn-container">
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev"></a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next"></a>
            </div>
        </div>
    </section>
</div>

<section class="about_section layout_padding">
    <div class="container">
      <h2>
        SABORES
      </h2>
    </div>

    <div class="container">
      <div class="about_card-container">
        <div class="about_card">
          <div class="about-detail">
            <div class="about_img-box">
              <img src="images/doce.jpg" alt="">
            </div>
            <div class="card_detail-ox">
              <h4>
                DOCE DE LEITE
              </h4>
              <p>
              O mais delicioso alfajor!
              Feito com recheio cremoso de doce de leite e cobertura de chocolate na medida.
              </p>
              <h2>
                R$20.00
              </h2>
            </div>
          </div>
          <div>
            <a href="" class="about_btn">
              Clique Aqui!
            </a>
          </div>
        </div>
        <div class="about_card">
          <div class="about-detail">
            <div class="about_img-box">
              <img src="images/aoleite.png" alt="">
            </div>
            <div class="card_detail-ox">
              <h4>
                CHOCOLATE AO LEITE
              </h4>
              <p>
              O mais delicioso alfajor!
              Feito com recheio cremoso e cobertura de chocolate ao leite na medida.
              </p>
              <h2>
                R$20.00
              </h2>
            </div>
          </div>
          <div>
            <a href="" class="about_btn">
              Clique Aqui!
            </a>
          </div>
        </div>
        <div class="about_card">
          <div class="about-detail">
            <div class="about_img-box">
              <img src="images/branco.jpg" alt="">
            </div>
            <div class="card_detail-ox">
              <h4>
                CHOCOLATE BRANCO
              </h4>
              <p>
                O mais delicioso alfajor!
                Feito com recheio cremoso e cobertura de chocolate branco na medida.
              </p>
              <h2>
                R$20.00
              </h2>
            </div>
          </div>
          <div>
            <a href="" class="about_btn">
              Clique Aqui!
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>


<!-- CONTATO / ENCOMENDA -->
<section class="contact_section layout_padding">
    <div class="container">
        <p>Faça a sua</p>
        <h2>ENCOMENDA</h2>
    </div>

    <div class="container">
        <div class="row">

            <div class="col-md-6">
                <form>
                    <div class="contact_form-container">
                        <label>
                            Nome:
                            <input type="text" name="nome">
                        </label>

                        <label>
                            Telefone:
                            <input type="tel" name="telefone">
                        </label>

                        <label>
                            Itens:
                            <textarea cols="30" rows="10"></textarea>
                        </label>

                        <div class="mt-4">
                            <button type="submit">Finalizar</button>
                        </div>
                    </div>
                </form>
            </div>

            <div class="col-md-6">
                <div class="contact_img-box">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3837.8328029779163!2d-48.032117184528246!3d-15.865382528933065"
                        width="600" height="450" style="border:0;" allowfullscreen loading="lazy">
                    </iframe>
                </div>
            </div>

        </div>
    </div>
</section>

<hr class="footer_hr">

<section class="container-fluid footer_section">
    <p>
        &copy; Direitos Reservados a programadora Izabelle
    </p>
</section>

<script src="js/jquery-3.4.1.min.js"></script>
<script src="js/bootstrap.js"></script>

</body>
</html>
<?php