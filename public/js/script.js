if (window.SimpleSlide) {
    new SimpleSlide({
        slide: 'quote',
        time: 5000
    })

    new SimpleSlide({
        slide: 'portfolio',
        time: 5000,
        nav: true
    })
} 

if (window.SimpleAnime) {
    new SimpleAnime();
}

if (window.SimpleForm) {
    new SimpleForm({
        form: ".formphp",
        button: "#enviar",
        erro: "<div id='form-erro'><h3>Erro no Envio</h3><br><p>Um erro ocorreu, tente novamente mais tarde.</p></div>",
        sucesso: "<div id='form-sucesso'><h3>Formulário enviado com sucesso</h3><br><p>Em breve eu entro em contato com você.</p></div>",
    });
}