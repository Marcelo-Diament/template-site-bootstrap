<!-- head -->
<?php require_once("./inc/head.php"); ?>
<!-- /head -->
<!-- header -->
<?php require_once("./inc/header.php"); ?>
<!-- /header -->
<!-- main -->
<main class="container-fluid">
    <!-- Topo da página -->
    <header class="topo-pagina p-3 mb-5" id="topoContato">
        <h1 class="p-3">Contato</h1>
        <p class="px-3 pt-0 topo">Entre em contato conosco e solicite uma condição especial para sua compra!</p>
    </header>
    <!-- /Topo da página -->
    <!-- Section de Contato -->
    <!-- Aqui usamos um container dentro de um container-fluid para conferirmos as margens laterais para a vitrine de produtos por categoria -->
    <section class="container my-3">
        <!-- Criando uma div com a classe row para usarmos as colunas e dividirmos a row entre dados de contato e formulário de contato -->
        <div class="row">
            <article class="form col-12 col-md-6" id="formularioContato">
                <h4>Envie sua mensagem!</h4>
                <p class="ml-0">Preencha o formulário a seguir e responderemos o quanto antes!</p>
                <form action="" method="post">
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="nome">Nome</label>
                            <input type="text" class="form-control" name="nome" id="nome" placeholder="Seu nome" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="email">email</label>
                            <input type="email" class="form-control" name="email" id="email" placeholder="nome@email.com" required>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-3">
                            <label for="cep">CEP</label>
                            <input type="text" class="form-control" name="cep" id="cep">
                        </div>
                        <div class="form-group col-md-7">
                            <label for="cidade">Cidade</label>
                            <input type="text" class="form-control" name="cidade" id="cidade" placeholder="São Paulo">
                        </div>
                        <div class="form-group col-md-2">
                            <label for="uf">UF</label>
                            <select class="form-control" name="uf" id="uf">
                                <option disabled selected>UF</option>
                                <?php
                                // Array de UFs (ordenado por região)
                                $ufs = ["RO", "AC", "AM", "RR", "PA", "AP", "TO", "MA", "PI", "CE", "RN", "PB", "PE", "AL", "SE", "BA", "MG", "ES", "RJ", "SP", "PR", "SC", "RS", "MS", "MT", "GO", "DF"];
                                // Ordenando o array de UFs (ascendente)
                                asort($ufs);
                                ?>
                                <!-- Criando um loop PHP para percorrer as UFs do array $ufs. Para cada UF criaremos uma tag <option></option> -->
                                <?php foreach ($ufs as $uf) : ?>
                                    <option value="<?= $uf ?>"><?= $uf ?></option>
                                <?php endforeach; ?>
                                <!-- Finalizando nosso loop foreach -->
                            </select>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-10">
                            <label for="logradouro">Endereço</label>
                            <input type="text" class="form-control" name="logradouro" id="logradouro" placeholder="Av. Brasil">
                        </div>
                        <div class="form-group col-md-2">
                            <label for="numero">Número</label>
                            <input type="text" class="form-control" name="numero" id="numero" placeholder="123-A">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="mensagem">Mensagem</label>
                        <textarea class="form-control" name="mensagem" id="mensagem" rows="3"></textarea>
                    </div>
                    <div class="form-group">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="optIn-newsletter" id="optIn-newsletter" checked>
                            <label class="form-check-label" for="optIn-newsletter">Por favor, me envie promoções!</label>
                        </div>
                    </div>
                    <div class="form-group clearfix">
                        <!-- Importante: como estamos usando float no botão, acabamos por 'bagunçar' o posicionamento dos elementos seguintes.
                        Por isso, estamos usando a classe clearfix no elemento pai do botão (ele possui um pseudo elemento com display block e propriedade clear:both)
                        Essas propriedades fazem com que os elementos seguintes passem a se comportar normalmente. -->
                        <button type="submit" class="btn btn-info float-right">Enviar</button>
                    </div>
                </form>
            </article>
            <article class="dados-contato col-12 col-md-6" id="dadosContato">
                <h4>Entre em contato conosco!</h4>
                <p class="ml-0">Se preferir, entre em contato conosco - teremos prazer em te ajudar!</p>
                <ul class="mt-5 p-4 rounded bg-light">
                    <li class="mt-3 mb-5 horario">
                        <h5 class="mb-2 text-center">Horário de Funcionamento</h5>
                        <p class="text-center">Segunda à Sábado das 8h às 18h</p>
                    </li>
                    <h5 class="mb-3 text-center">Meios de Contato</h5>
                    <li class="text-center"><a href="https://wa.me/+5511976052723?text=Ol%C3%A1,%0D%0A%0D%0AAcessei%20o%20site%20e%20gostaria%20de%20saber%20mais%20sobre%0D%0A" title="Envie um zap pra gente!"><i class="fab fa-whatsapp mr-2"></i>11 97605 2723</a></li>
                    <li class="text-center"><a href="tel:+5511976052723" title="Ligue para a gente"><i class="fas fa-phone mr-2"></i>11 2345 6789</a></li>
                    <li class="text-center"><a href="mailto:contato@djament.com.br" title="Envie um email para a gente"><i class="fas fa-envelope mr-2"></i>marcelo@djament.com.br</a></li>
                    <li class="text-center"><a href="https://g.page/digitalhousebrasil?share" target="_blank" title="Veja nosso endereço no Google Maps"><i class="fa fa-map-marker-alt mr-2"></i>Av. Dr. Cardoso de Melo, 90 - Vila Olímpia, São Paulo</a></li>
                    <li class="mt-3 mb-5 redes-sociais">
                        <h5 class="mb-4 text-center">Conecte-se com a gente</h5>
                        <div class="d-flex flex-row flex-nowrap justify-content-center">
                            <a href="#" target="_blank" title="Acesse nosso Insta"><i class="fab fa-instagram mr-2"></i></a>
                            <a href="#" target="_blank" title="Acesse nosso Face"><i class="fab fa-facebook mr-2"></i></a>
                            <a href="#" target="_blank" title="Acesse nosso Twitter"><i class="fab fa-twitter mr-2"></i></a>
                            <a href="#" target="_blank" title="Acesse nosso Pinterest"><i class="fab fa-pinterest mr-2"></i></a>
                        </div>
                    </li>
                </ul>
                <a href="./produto.php"><img src="" alt=""></a>
            </article>
        </div>
        <div class="row">
            <article class="col-12 my-5" id="localizacao">
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14624.191902814306!2d-46.6753419!3d-23.6026123!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x739f0ddb0439cf94!2sDigital%20House%20S%C3%A3o%20Paulo!5e0!3m2!1spt-BR!2sbr!4v1587083400476!5m2!1spt-BR!2sbr" height="450" frameborder="0" style="border:0;" allowfullscreen="true" aria-hidden="false" tabindex="0"></iframe>
            </article>
        </div>
    </section>
    <!-- /Section de Contato -->
</main>
<!-- /main -->
<!-- footer -->
<?php require_once("./inc/footer.php"); ?>
<!-- /footer -->