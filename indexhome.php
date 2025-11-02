<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - Meu Site</title>

    <!-- CSS do Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- CSS personalizado -->
    <style>
        html, body {
            height: 100%;
        }

        body {
            display: flex;
            flex-direction: column;
        }
        /* Header */
        header {
            background-color: #343a40;
            color: white;
            padding: 20px 0;
        }
        header h1 {
            margin: 0;
            font-size: 2rem;
        }
        /* Menu */
        .links a {
            color: white;
            margin: 0 10px;
            text-decoration: none;
        }
        .links a:hover {
            text-decoration: underline;
        }
        /* Main */
        main {
            flex: 1;
            padding: 30px 20px;
        }
        /* Footer */
        footer {
            background-color: #f8f9fa;
            text-align: center;
            padding: 15px;
            margin-top: 30px;
        }
        .footer {
            background-color: #343a40; /* fundo escuro */
            color: white;
        }

        .footer a {
            color: #f8f9fa;
            text-decoration: none;
        }

        .footer a:hover {
            text-decoration: none;
        }
        .navbar .nav-link {
            text-decoration: none;
            color: white;
        }
        /* Destacar link ativo */
        .navbar .nav-link.active {
            font-weight: bold;
            color: #ffc107 !important; /* amarelo Bootstrap */
        }

        /* Espaçamento entre links no desktop */
        .navbar-nav .nav-item {
            margin-left: 10px;
        }

        /* Hover suave */
        .navbar-nav .nav-link:hover {
            color: #0d6efd !important; /* azul Bootstrap */
            text-decoration: none;
        }

    </style>
</head>
<body>

<header class="text-center">
    <h1>Meu Site Principal</h1>
    <nav class="links mt-2">
        <?php include_once("menu.php"); /* Menu com links de navegação */ ?>
    </nav>
</header>

<main class="container">
    <?php
        if(empty($_SERVER['QUERY_STRING'])){
            $dado = "conteudo";
            include_once("$dado.php"); /* Conteúdo padrão */
        } else {
            $dado = $_GET['query'];
            include_once("$dado.php"); /* Conteúdo de outras páginas */
        }
    ?>
</main>

<footer class="footer mt-auto py-4 bg-dark text-white">
    <div class="container text-center">
        <p>Rodapé do meu site ™ - Todos os direitos reservados</p>
        <small>2025 © Meu Site</small>
    </div>
</footer>

<!-- JS do Bootstrap 5 -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
