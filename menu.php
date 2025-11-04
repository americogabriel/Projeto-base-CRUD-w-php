<?php
$current = $_GET['query'] ?? 'conteudo';
?>
<nav class="navbar navbar-expand-md navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="?query=conteudo">MeuSite</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menuLinks" aria-controls="menuLinks" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="menuLinks">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link <?= ($current == 'clientes') ? 'active' : '' ?>" href="?query=clientes">Clientes</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?= ($current == 'quemsomos') ? 'active' : '' ?>" href="?query=quemsomos">Quem Somos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?= ($current == 'novocliente') ? 'active' : '' ?>" href="?query=novocliente">Cadastro</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?= ($current == 'conteudo') ? 'active' : '' ?>" href="?query=conteudo">Conteúdo</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
