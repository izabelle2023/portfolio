<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro - BrFideliza</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        /* Navbar */
        .tab {
            background-color: #A91528 !important;
        }
        #logo img {
            width: 60px;
            height: 60px;
            border-radius: 50%;
            margin-right: 10px;
        }
        #menu a img {
            width: 40px;
            transition: transform 0.2s;
        }
        #menu a img:hover {
            transform: scale(1.1);
        }

        /* Alert centralizado */
        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: calc(100vh - 120px); /* Considera navbar + footer */
        }
        .alert {
            max-width: 600px;
            width: 100%;
            text-align: center;
            border-radius: 12px;
            box-shadow: 0 4px 10px rgba(0,0,0,0.1);
        }

        /* Rodapé */
        footer {
            height: 50px;
            background-color: #A91528;
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-top: 20px;
        }
        .rodape {
            margin: 0;
        }

        /* Responsividade */
        @media (max-width: 576px) {
            #logo img {
                width: 50px;
                height: 50px;
            }
            #menu a img {
                width: 30px;
            }
            .alert {
                padding: 15px;
            }
        }
    </style>
</head>
<body>

    <nav class="navbar tab">
        <div class="container-fluid" id="navbar_marca">
            <div id="logo" class="d-flex align-items-center">
                <img src="../img/logo.jpg" alt="BrFideliza">
                <span class="navbar-brand mb-0 text-white">BrFideliza</span>
            </div>
            <div id="menu" class="d-flex gap-3">
                <a href="../home.php"><img src="../img/home-icon.png" alt="Página Inicial"></a>
                <a href="login.php"><img src="../img/user-icon.png" alt="Perfil do Usuário"></a>
                <a href="historico.php"><img src="../img/historico-icon.png" alt="Histórico"></a>
            </div>
        </div>
    </nav>

    <div class="container">
        <div class="alert alert-success" role="alert">
            <h4 class="alert-heading">Cadastro Realizado com Sucesso!</h4>
            <p>Seu cadastro foi concluído com sucesso. Agora você pode fazer login para acessar sua conta.</p>
            <hr>
            <p class="mb-0">Clique <a href="login.php">aqui</a> para fazer login.</p>
        </div>
    </div>

    <footer>
       <p class="rodape">© 2024 BrFideliza. Todos os direitos reservados.</p>
    </footer>

</body>
</html>
