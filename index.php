<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>steano</title>
    <link rel="shortcut icon" href="fotos/_3e0c8a24-0b1b-4138-98d0-9cc619ef6680.jpg">

    <base href="http://localhost/joao/">
    <link rel="stylesheet" href="css/style.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
    <header>
    <nav class="navbar navbar-expand-lg v" id="navbar">

<div class="container-fluid">

    <a class="navbar-brand" href="index.php">
        <img src="fotos/_3e0c8a24-0b1b-4138-98d0-9cc619ef6680.jpg" width="50px" style="border-radius: 50%;" alt=" Crack games" title="crack games">
    </a>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
        aria-expanded="false" aria-label="Toggle navigation">
        <span class="menu navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">

        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="index.php">INICIO</a>
            </li>
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="loja">LOJA</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" type="button" data-bs-toggle="modal"
                    data-bs-target="#exampleModal" data-bs-whatever="@mdo">CONTATO</a>
            </li>

        </ul>
    </div>
</div>
</nav>

<div class="modal fade " id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">

<div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel">Contato</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form action="https://formsubmit.co/your@email.com" method="POST">
                <div class="mb-3">
                    <label for="recipient-name" class="col-form-label">Nome Completo</label>
                    <input type="email" name="nome" id="email" class="form-control"
                        placeholder="Digite seu nome ">
                </div>
                <div class="mb-3">
                    <label for="message-text" class="col-form-label">Mensagem:</label>
                    <textarea class="form-control" id="message-text" rows="6"
                        placeholder="Digite sua mensagem"></textarea>
                </div>
                <div class="modal-footer">
            <button type="button" class="btn" data-bs-dismiss="modal">Fechar</button>
            <button type="button" class="btn" data-bs-dismiss="modal">Enviar</button>
        </div>

        <input type="text" name="name" required>
     <input type="email" name="email" required>


            </form>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn" data-bs-dismiss="modal">Fechar</button>
            <button type="button" class="btn" data-bs-dismiss="modal">Enviar</button>
        </div>
    </div>
</div>
</div>

    </header>
    <main>
        <?php

        if (isset($_GET["param"])) {
            $param = $_GET["param"];
            // serapar o parametro por /
            $p = explode("/", $param);
            //print_r($p);
        }

        $page = $p[0] ?? "inicio";
        $jogo = $p[1] ?? NULL;

        if ($page == "jogo") {
            $pagina = "jogo/{$jogo}.php";

        } else {
            $pagina = "paginas/{$page}.php";
        }

        if (file_exists($pagina)) {
            include $pagina;
        } else {
            include "paginas/erro.php";
        }

        ?>

    </main>

    <footer>
       <h2  class="text-center" style="margin-top: 30px; background-color: black; padding: 20px; border-radius: 10px 10px 0 0 ;">Desenvolvido: João Bosco </h2>
    </footer>
    

    <script src="js/bootstrap.bundle.min.js"></script>

<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

<script>
  AOS.init();
</script>
</body>
</html>