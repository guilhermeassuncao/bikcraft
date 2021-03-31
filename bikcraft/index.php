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
        <!-- Quebra -->
        <section class="quebra">
            <div class="container">
                <blockquote class="quote-externo">
                    <p>“o verdadeiro segredo da felicidade está em ter um genuíno interesse por todos os detalhes da vida cotidiana.”</p>
                    <cite>WILLIAM MORRIS</cite>
                </blockquote>
            </div>
        </section>
        <!-- Fim Quebra -->
        <!-- Footer -->
        <footer>
            <div class="footer">
                <div class="container">
                    <div class="grid-8 footer_historia">
                        <h3>Nossa História</h3>
                        <p>
                            Quando iniciamos a Bikcraft queriamos apenas um produto que adoraríamos utilizar. Eramos apaixonados por pedalar e também por fazer as coisas com as nossas próprias mãos.
                            Assim surgiu um sonho na garagem da nossa casa.
                        </p>
                    </div>
                    <div class="grid-4 footer_contato">
                        <h3>Contato</h3>
                        <ul>
                            <li>- +55 27 9999-9999</li>
                            <li>- contato@bikcraft.com</li>
                            <li>- Rua Pinheiros - Guriri - ES</li>
                        </ul>
                    </div>
                    <div class="grid-4 footer_redes">
                        <h3>Redes Sociais</h3>
                        <ul>
                            <li>
                                <a href="http://facebook.com" target="_blank"><img src="./public/img/redes-sociais/facebook.svg" alt="Facebook Bikcraft" /></a>
                            </li>
                            <li>
                                <a href="http://instragram.com" target="_blank"><img src="./public/img/redes-sociais/instagram.svg" alt="Instagram Bikcraft" /></a>
                            </li>
                            <li>
                                <a href="http://twitter.com" target="_blank"><img src="./public/img/redes-sociais/twitter.svg" alt="Twitter Bikcraft" /></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="copy">
                <div class="container">
                    <p class="grid-16">Bikcraft 2021 - Alguns direitos reservados.</p>
                </div>
            </div>
        </footer>
        <!-- Fim Footer -->
    </body>
</html>
