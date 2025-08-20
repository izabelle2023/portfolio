<?php
session_start();
if (!isset($_SESSION['nome'])) {
    header('Location: index.php');
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Painel</title>
    <link rel="stylesheet" href="css/bootstrap.css">
</head>
<body>
    <div class="container mt-5">
        <h2>Bem-vinda, <?php echo $_SESSION['nome']; ?>!</h2>
        <a href="logout.php" class="btn btn-danger mt-3">Sair</a>
    </div>
</body>
</html>

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
                    <span>
                      Sabores
                    </span>
                  </h1>
                  <p>
                   Você não pode comprar felicidade, mas pode comprar brigadeiro gourmet que é quase a mesma coisa;
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
                    <span>
                      Sabores
                    </span>
                  </h1>
                  <p>
                    Para você que está pensando só em política, venho dizer que meus doces gourmets são um ótimo partido;
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
          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="sr-only">Next</span>
          </a>
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

  <section class="team_section layout_padding">
    <div class="container">
      <h2>
        NOSSOS CONTATOS
      </h2>
    </div>
    
    <div class="container">
      <div class="about_card-container">
        <div class="about_card">
          <div class="about-detail">
            <div class="about_img-box">
              <img src="images/whatsapp.png" alt="">
            </div>
            <div class="card_detail-ox">
              <h4>
                WHATSAPP
              </h4>
            </div>
          </div>
          <div>
            <a href="https://chat.whatsapp.com/C7AhF4j2ErDBd4gMQ0dIpe" class="about_btn">
              Clique Aqui!
            </a>
          </div>
        </div>
        <div class="about_card">
          <div class="about-detail">
            <div class="about_img-box">
              <img src="images/facebook.png" alt="">
            </div>
            <div class="card_detail-ox">
              <h4>
                FACEBOOK
              </h4>
            </div>
          </div>
          <div>
            <a href="https://www.facebook.com/Universo-do-alfajor-108911888520650" class="about_btn">
              Clique Aqui!
            </a>
          </div>
        </div>
        <div class="about_card">
          <div class="about-detail">
            <div class="about_img-box">
              <img src="images/insta.png" alt="">
            </div>
            <div class="card_detail-ox">
              <h4>
                INSTAGRAM
              </h4>
            </div>
          </div>
          <div>
            <a href="https://www.instagram.com/universo_do_alfajor/" class="about_btn">
              Clique Aqui!
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="contact_section layout_padding">
    <div class="container">
      <p>
        Faça a sua 
      </p>
      <h2 class="">
        ENCOMENDA
      </h2>
    </div>
    <div class="container">

      <div class="row">
        <div class="col-md-6 ">
          <form action="">
            <div class="contact_form-container">
              <div>
                <div>
                  <label>
                    Nome:
                    <input type="text" />
                  </label>
                </div>
                <div>
                  <label>
                    Telefone:
                    <input type="email" />
                  </label>
                </div>

                <div>
                  <label>
                    Itens:
                    <textarea name="" id="" cols="30" rows="10"></textarea>
                  </label>
                </div>
                <div class="mt-5">
                  <button type="submit">
                    Finalizar
                  </button>
                </div>
              </div>
            </div>
          </form>
        </div>
        <div class="col-md-6">
          <div class="contact_img-box">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3837.8328029779163!2d-48.032117184528246!3d-15.865382528933065!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x935a2d97a15b0507%3A0x3c3e4472ee75d834!2sUniversidade%20Cat%C3%B3lica%20de%20Bras%C3%ADlia%20(UCB)%20-%20C%C3%A2mpus%20Taguatinga!5e0!3m2!1spt-BR!2sbr!4v1654804488484!5m2!1spt-BR!2sbr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>
        </div>
      </div>
    </div>
  </section>
 
  <section class="info_section layout_padding">
    <div class="container info_content">
      <div>
        <div class="row">
          <div class="col-md-6">
            <div class="row">
              <div class="col-md-6">
                <h5>
                  Contato:
                </h5>
                <ul>
                  <li>
                    <a href="">
                      (61) 9-8653-2640
                    </a>
                  </li>
                </ul>
              </div>
              <div class="col-md-6">
                <h5>
                 Locais de  Vendas:
                </h5>
                <ul>
                  <li>
                    <a href="">
                      Centro Oeste (DF)
                    </a>
                  </li>
                </ul>
              </div>
            </div>
            <div class="form_container mt-5">
            </div>
          </div>
          <div class="col-md-6">
            <div class="info_img-box">
              <img src="images/alfajor.png" alt="">
            </div>
            
          </div>


        </div>
      </div>

    </div>
  </section>

  <hr class="footer_hr">

  <section class="container-fluid footer_section">
    <p>
      &copy;
      Direitos Reservados a programadora Izabelle
      <a href="https://html.design/"></a>
    </p>
  </section>

  <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.js"></script>



  <script>
    function openNav() {
      document.getElementById("myNav").classList.toggle("menu_width")
      document.querySelector(".custom_menu-btn").classList.toggle("menu_btn-style")
    }
  </script>


</body>

</html>