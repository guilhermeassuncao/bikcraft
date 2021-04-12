<?php
    require 'configs/header.php';

    $titulo = Array(
        '/' => 'Bikcraft - Bicicletas Personalizadas',
        '/sobre' => 'Bikcraft  – Sobre - Saiba mais sobre a gente',
        '/produtos' => 'Bikcraft  – Produtos - Conheça as linhas Passeio, Retrô e Esporte',
        '/portfolio' => 'Bikcraft  – Portfólio - Conheça o portfólio de clientes',
        '/contato' => 'Bikcraft  – Contato - 27 99697-8448'
    );

    $tituloAtual = $_SERVER['REQUEST_URI'];
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
        <link rel="stylesheet" href="./public/css/geral.css" />
        <link rel="stylesheet" href="./public/css<?php echo (($tituloAtual == '/') ? '/index' : $tituloAtual) ?>.css" />
        <link rel="stylesheet" href="./public/css/responsivo.css" />
        <link rel="stylesheet" href="./public/css/simple-slide.css" />
        <!-- Fim CSS -->

        <!-- Script -->
        <script>document.documentElement.classList.add("js")</script>
        <!-- Fim Script -->

        <!-- Titulo -->
        <title><?=$titulo[$tituloAtual]?></title>
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
                        <li><a href="/sobre" <?php if ($tituloAtual == '/sobre') echo "class='menu_ativo'";?>> Sobre</a></li>
                        <li><a href="/produtos" <?php if ($tituloAtual == '/produtos') echo "class='menu_ativo'";?>>Produtos</a></li>
                        <li><a href="/portfolio" <?php if ($tituloAtual == '/portfolio') echo "class='menu_ativo'";?>>Portfólio</a></li>
                        <li><a href="/contato" <?php if ($tituloAtual == '/contato') echo "class='menu_ativo'";?>>Contato</a></li>
                    </ul>
                </nav>
                <!-- Fim Navegação -->
            </div>
        </header>
        <!-- Fim Header -->
        <?php  
            require 'configs/section.php';
        ?>

        <!-- Footer -->
        <footer>
            <div class="quebra">
                <div class="container">
                    <blockquote class="quote-externo">
                        <p>“o verdadeiro segredo da felicidade está em ter um genuíno interesse por todos os detalhes da vida cotidiana.”</p>
                        <cite>WILLIAM MORRIS</cite>
                    </blockquote>
                </div>
            </div>
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
                            <li>- +55 27 99697-8448</li>
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

        <!-- Script -->
        <script src="./public/js/simple-slide.js"></script>
        <script src="./public/js/script.js"></script>
        <!-- Fim Script -->
    </body>
</html>
