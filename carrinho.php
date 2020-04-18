<?php require_once("./inc/head.php"); ?>
<?php require_once("./inc/header.php"); ?>
<main class="container-fluid">
    <header class="topo-pagina p-3 mb-5" id="topoCarrinho">
        <h1 class="p-3">Carrinho</h1>
        <p class="px-3 pt-0 topo">Confira seu pedido, seus dados e clique em Finalize sua Compra</p>
    </header>
    <section class="container my-3">
        <div class="row">
            <article class="form col-12" id="formularioContato">
                <h4 class="text-center">Lista de Produtos Selecionados</h4>
                <p class="ml-0 mb-5 text-center">Confira os produtos selecionados e clique em Finalizar Compra</p>
                <table class="table text-center">
                    <thead class="thead-light">
                        <tr>
                            <th scope="col" colspan="2">Produto</th>
                            <th scope="col" class="d-none d-md-table-cell">Preço Unitário</th>
                            <th scope="col">Preço Total</th>
                            <th scope="col">Opções</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td colspan="2">
                                <div class="d-flex align-items-start justify-content-start flex-column flex-md-row">
                                    <img src="./assets/img/produto-04-440x440.jpg" alt="Produto 04" width="72" height="72">
                                    <div class="text-left mx-0 mx-md-3">
                                        <h5 class="my-0"><span class="cart-qtd">1</span> Produto 04</h5>
                                        <p class="my-0">Tamanho: <span class="cart-size">M</span></p>
                                        <small class="text-muted my-0">SKU: 123-EFIUAB-98</small>
                                    </div>
                                </div>
                            </td>
                            <td class="cart-unit-price d-none d-md-table-cell">R$ 99.99</td>
                            <td class="cart-subtotal-price">R$ 99.99</td>
                            <td>
                                <a href="#" class="ml-3" data-toggle="modal" data-target="#modalProduto01"><i class="fas fa-pencil"></i></a>
                                <a href="#" class="ml-3"><i class="fas fa-times"></i></a>
                            </td>
                            <!-- Modal Produto 01 -->
                            <div class="modal fade mt-5" id="modalProduto01" tabindex="-1" role="dialog" aria-labelledby="modalProduto01Label" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="modalProduto01Label">Item 01</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <form action="carrinho.php" method="post" id="formProduto01Edit">
                                                <div class="form-row">
                                                    <div class="form-group col">
                                                        <label for="tamanhoProduto01">Tamanhos</label>
                                                        <select class="form-control" name="tamanhoProduto01" id="tamanhoProduto01" required>
                                                            <option value="" disabled selected>--</option>
                                                            <?php $tamanhos = ["PP", "P", "M", "G", "GG"]; ?>
                                                            <?php foreach ($tamanhos as $tamanho) : ?>
                                                                <option value="<?= $tamanho ?>"><?= $tamanho ?></option>
                                                            <?php endforeach; ?>
                                                        </select>
                                                    </div>
                                                    <div class="form-group col">
                                                        <label for="quantidadeProduto01">Quantidade</label>
                                                        <input type="number" class="form-control" id="quantidadeProduto01" step="1" min="1" value="1" required>
                                                    </div>
                                                </div>
                                                <div class="form-group clearfix">
                                                    <button type="submit" class="mx-auto my-2 btn btn-info btn-lg col-md-3 float-right">Atualizar</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <!-- /Modal Produto 01 -->
                        </tr>
                        <tr>
                            <td colspan="2">
                                <div class="d-flex align-items-start justify-content-start flex-column flex-md-row">
                                    <img src="./assets/img/produto-07-440x440.jpg" alt="Produto 07" width="72" height="72">
                                    <div class="text-left mx-0 mx-md-3">
                                        <h5 class="my-0"><span class="cart-qtd">2</span> Produto 07</h5>
                                        <p class="my-0">Tamanho: <span class="cart-size">GG</span></p>
                                        <small class="text-muted my-0">SKU: 103-EF45EF-98</small>
                                    </div>
                                </div>
                            </td>
                            <td class="cart-unit-price d-none d-md-table-cell">R$ 99.99</td>
                            <td class="cart-subtotal-price">R$ 198.98</td>
                            <td>
                                <a href="" class="ml-3" data-toggle="modal" data-target="#modalProduto02"><i class="fas fa-pencil"></i></a>
                                <a href="" class="ml-3"><i class="fas fa-times"></i></a>
                            </td>
                            <!-- Modal Produto 02 -->
                            <div class="modal fade mt-5" id="modalProduto02" tabindex="-1" role="dialog" aria-labelledby="modalProduto02Label" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="modalProduto02Label">Item 02</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <form action="carrinho.php" method="post" id="formProduto02Edit">
                                                <div class="form-row">
                                                    <div class="form-group col">
                                                        <label for="tamanhoProduto02">Tamanhos</label>
                                                        <select class="form-control" name="tamanhoProduto02" id="tamanhoProduto02" required>
                                                            <option value="" disabled selected>--</option>
                                                            <?php $tamanhos = ["PP", "P", "M", "G", "GG"]; ?>
                                                            <?php foreach ($tamanhos as $tamanho) : ?>
                                                                <option value="<?= $tamanho ?>"><?= $tamanho ?></option>
                                                            <?php endforeach; ?>
                                                        </select>
                                                    </div>
                                                    <div class="form-group col">
                                                        <label for="quantidadeProduto02">Quantidade</label>
                                                        <input type="number" class="form-control" id="quantidadeProduto02" step="1" min="1" value="1" required>
                                                    </div>
                                                </div>
                                                <div class="form-group clearfix">
                                                    <button type="submit" class="mx-auto my-2 btn btn-info btn-lg col-md-3 float-right">Atualizar</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <!-- /Modal Produto 02 -->
                        </tr>
                        <tr>
                            <td colspan="2">
                                <div class="d-flex align-items-start justify-content-start flex-column flex-md-row">
                                    <img src="./assets/img/produto-08-440x440.jpg" alt="Produto 08" width="72" height="72">
                                    <div class="text-left mx-0 mx-md-3">
                                        <h5 class="my-0"><span class="cart-qtd">1</span> Produto 08</h5>
                                        <p class="my-0">Tamanho: <span class="cart-size">PP</span></p>
                                        <small class="text-muted my-0">SKU: 003-RWIUAB-66</small>
                                    </div>
                                </div>
                            </td>
                            <td class="cart-unit-price d-none d-md-table-cell">R$ 99.99</td>
                            <td class="cart-subtotal-price">R$ 99.99</td>
                            <td>
                                <a href="" class="ml-3" data-toggle="modal" data-target="#modalProduto03"><i class="fas fa-pencil"></i></a>
                                <a href="" class="ml-3"><i class="fas fa-times"></i></a>
                            </td>
                            <!-- Modal Produto 03 -->
                            <div class="modal fade mt-5" id="modalProduto03" tabindex="-1" role="dialog" aria-labelledby="modalProduto03Label" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="modalProduto03Label">Item 03</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <form action="carrinho.php" method="post" id="formProduto03Edit">
                                                <div class="form-row">
                                                    <div class="form-group col">
                                                        <label for="tamanhoProduto03">Tamanhos</label>
                                                        <select class="form-control" name="tamanhoProduto03" id="tamanhoProduto03" required>
                                                            <option value="" disabled selected>--</option>
                                                            <?php $tamanhos = ["PP", "P", "M", "G", "GG"]; ?>
                                                            <?php foreach ($tamanhos as $tamanho) : ?>
                                                                <option value="<?= $tamanho ?>"><?= $tamanho ?></option>
                                                            <?php endforeach; ?>
                                                        </select>
                                                    </div>
                                                    <div class="form-group col">
                                                        <label for="quantidadeProduto03">Quantidade</label>
                                                        <input type="number" class="form-control" id="quantidadeProduto03" step="1" min="1" value="1" required>
                                                    </div>
                                                </div>
                                                <div class="form-group clearfix">
                                                    <button type="submit" class="mx-auto my-2 btn btn-info btn-lg col-md-3 float-right">Atualizar</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <!-- /Modal Produto 03 -->
                        </tr>
                    </tbody>
                </table>

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
            <article class="col-12 my-5">

            </article>
        </div>
    </section>
</main>
<?php require_once("./inc/footer.php"); ?>