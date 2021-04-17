<!-- Contato -->
<main id="contato">
    <!-- Introdução Interna -->
    <section class="introducao-interna">
        <div class="container">
            <h1 data-anime="400" class="fadeInDown">Contato</h1>
            <p data-anime="800" class="fadeInDown">tire suas dúvidas com a gente</p>
        </div>
    </section>
    <!-- Fim Introdução Interna -->
    <!-- Contato -->
    <section data-anime="1200" class="informacoes fadeInDown">
        <div class="container">
            <form class="contato_form grid-8 formphp" method="post" name="form" action="../../configs/enviar-sendgrid.php">
                <label for="nome">Nome</label>
                <input id="nome" name="nome" type="text" required/>
                <label for="email">E-mail</label>
                <input id="email" name="email" type="email" required/>
                <label for="telefone">Telefone</label>
                <input id="telefone" name="telefone" type="text" required/>
                <label for="mensagem">Mensagem</label>
                <textarea name="mensagem" id="mensagem" required></textarea>


                <label class="nao-aparece">Se você não é um robô, deixe em branco.</label>
				<input type="text" class="nao-aparece" name="leaveblank">
				<label class="nao-aparece">Se você não é um robô, não mude este campo.</label>
				<input type="text" class="nao-aparece" name="dontchange" value="http://">

                <button id="enviar" name="enviar" type="submit" class="btn btn-preto">Enviar</button>
            </form>
            <div class="contato_dados grid-8">
                <h3>Dados</h3>
                <span>+55 99 9999-9999</span>
                <span>contato@bikcraft.com</span>
                <span>Rua Ali Perto - Botafogo</span>
                <span>Rio de Janeiro - RJ - Brasil</span>
                <h3>Redes Sociais</h3>

                <ul>
                    <li>
                        <a href="http://facebook.com" target="_blank"><img src="https://bikcraft.com/wp-content/uploads/2019/08/facebook.svg" alt="Facebook Bikcraft" /></a>
                    </li>
                    <li>
                        <a href="http://instragram.com" target="_blank"><img src="https://bikcraft.com/wp-content/uploads/2019/08/instagram.svg" alt="Instagram Bikcraft" /></a>
                    </li>
                    <li>
                        <a href="http://twitter.com" target="_blank"><img src="https://bikcraft.com/wp-content/uploads/2019/08/twitter.svg" alt="Twitter Bikcraft" /></a>
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <!-- Fim Contato -->
    <!-- Mapa -->
    <section data-anime="1600" class="contato_mapa fadeInDown">
        <div class="container">
            <a href="http://google.com" target="_blank" class="grid-16"><img src="../../public/img/endereco-bikcraft.jpg" alt="Rua Ali Perto - Botafogo"></a>
        </div>
    </section>
    <!-- Fim Mapa -->
</main>
<!-- Fim Contato -->
