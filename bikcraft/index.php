<?php
    require 'configs/header.php';
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <!-- Meta Tags -->
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <!-- Fim Meta Tags -->

        <!-- CSS -->
        <link rel="stylesheet" href="./public/css/normalize.css" />
        <link rel="stylesheet" href="./public/css/reset.css" />
        <link rel="stylesheet" href="./public/css/grid.css" />
        <link rel="stylesheet" href="./public/css/estilo.css" />
        <!-- Fim CSS -->

        <!-- Titulo -->
        <title>Bikcraft</title>
        <!-- Fim Titulo -->
    </head>
    <body>
        <!-- Header -->
        <header class="header">
            <div class="container">
                <a href="/" class="grid-4">
                    <img src="./public/img/bikcraft.svg" alt="Bikcraft" />
                </a>
                <!-- Navegação -->
                <nav class="header_menu grid-12">
                    <ul>
                        <li><a href="/sobre">Sobre</a></li>
                        <li><a href="/produtos">Produtos</a></li>
                        <li><a href="/portfolio">Portfólio</a></li>
                        <li><a href="/contato">Contato</a></li>
                    </ul>
                </nav>
                <!-- Fim Navegação -->
            </div>
        </header>
        <!-- Fim Header -->
        <?php  
            require 'configs/section.php';
        ?>
    </body>
</html>
