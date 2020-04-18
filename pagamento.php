<?php require_once("./inc/head.php"); ?>
<?php require_once("./inc/header.php"); ?>
<main class="container-fluid">
    <header class="topo-pagina p-3 mb-5" id="topoPagamento">
        <h1 class="p-3">Pagamento</h1>
        <p class="px-3 pt-0 topo">Entre em contato conosco e solicite uma condição especial para sua compra!</p>
    </header>
    <section class="container my-3">
        <div class="row">
            <article class="form col-12 col-md-7" id="formularioContato">
                <h4>Endereço de Entrega</h4>
                <p class="ml-0">Preencha o formulário formulário com os dados do endeço de entrega</p>
                <form action="" method="post">
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="nomeDestinatario">Nome do Destinatário</label>
                            <input type="text" class="form-control" name="nomeDestinatario" id="nomeDestinatario" placeholder="Nome de quem vai receber" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="emailDestinatario">email do Destinatário</label>
                            <input type="email" class="form-control" name="emailDestinatario" id="emailDestinatario" placeholder="nomedestinatario@email.com" required>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-3">
                            <label for="cepDestinatario">CEP</label>
                            <input type="text" class="form-control" name="cepDestinatario" id="cepDestinatario" placeholder="01234-567" required>
                        </div>
                        <div class="form-group col-md-7">
                            <label for="cidadeDestinatario">Cidade</label>
                            <input type="text" class="form-control" name="cidadeDestinatario" id="cidadeDestinatario" placeholder="São Paulo" required>
                        </div>
                        <div class="form-group col-md-2">
                            <label for="ufDestinatario">UF</label>
                            <select class="form-control" name="ufDestinatario" id="ufDestinatario" required>
                                <option disabled selected>UF</option>
                                <?php
                                $ufs = ["RO", "AC", "AM", "RR", "PA", "AP", "TO", "MA", "PI", "CE", "RN", "PB", "PE", "AL", "SE", "BA", "MG", "ES", "RJ", "SP", "PR", "SC", "RS", "MS", "MT", "GO", "DF"];
                                asort($ufs);
                                ?>
                                <?php foreach ($ufs as $uf) : ?>
                                    <option value="<?= $uf ?>"><?= $uf ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-7">
                            <label for="logradouroDestinatario">Endereço</label>
                            <input type="text" class="form-control" name="logradouroDestinatario" id="logradouroDestinatario" placeholder="Av. Brasil" required>
                        </div>
                        <div class="form-group col-md-2">
                            <label for="numeroDestinatario">Número</label>
                            <input type="text" class="form-control" name="numeroDestinatario" id="numeroDestinatario" placeholder="123-A" required>
                        </div>
                        <div class="form-group col-md-3">
                            <label for="complementoDestinatario">Complemento</label>
                            <input type="text" class="form-control" name="complementoDestinatario" id="complementoDestinatario" placeholder="Apto. 420" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="observacaoPedido">Nota do Cliente</label>
                        <textarea class="form-control" name="observacaoPedido" id="observacaoPedido" rows="3" aria-describedby="#observacaoPedidoHelp"></textarea>
                        <small id="observacaoPedidoHelp" class="form-text text-muted">Se houver alguma observação, inclua nesse campo (ex.: deixar na portaria).</small>
                    </div>
                    <div class="form-group">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="optIn-newsletter" id="optIn-newsletter" checked>
                            <label class="form-check-label" for="optIn-newsletter">Por favor, me envie promoções!</label>
                        </div>
                    </div>
                    <div class="form-group clearfix">
                        <button type="submit" class="btn btn-info float-right">Enviar</button>
                    </div>
                </form>
            </article>
            <article class="dados-contato col-12 col-md-5" id="dadosContato">
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
            </article>
        </div>
    </section>
</main>
<?php require_once("./inc/footer.php"); ?>