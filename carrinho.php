<?php require_once("./inc/head.php"); ?>
<?php require_once("./inc/header.php"); ?>
<main class="container-fluid">
    <header class="topo-pagina p-3 mb-5" id="topoCarrinho">
        <h1 class="p-3">Carrinho</h1>
        <p class="px-3 pt-0 topo">Confira seu pedido, seus dados e clique em Finalize sua Compra</p>
    </header>
    <section class="container my-3">
        <div class="row">
            <form class="col-12 mb-5" id="carrinhoForm" action="pagamento.php" method="post">
                <h2 class="col-12 text-center text-info mt-5 mb-4">Produtos selecionados</h2>
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
                                            <div id="formProduto01Edit">
                                                <div class="form-row">
                                                    <div class="form-group col">
                                                        <label for="tamanhoProduto01">Tamanhos</label>
                                                        <select class="form-control" name="tamanhoProduto01" id="tamanhoProduto01" form="carrinhoForm" required>
                                                            <option value="" disabled selected>--</option>
                                                            <?php $tamanhos = ["PP", "P", "M", "G", "GG"]; ?>
                                                            <?php foreach ($tamanhos as $tamanho) : ?>
                                                                <option value="<?= $tamanho ?>"><?= $tamanho ?></option>
                                                            <?php endforeach; ?>
                                                        </select>
                                                    </div>
                                                    <div class="form-group col">
                                                        <label for="quantidadeProduto01">Quantidade</label>
                                                        <input type="number" class="form-control" id="quantidadeProduto01" step="1" min="1" value="1" form="carrinhoForm" required>
                                                    </div>
                                                </div>
                                                <div class="form-group clearfix">
                                                    <button data-dismiss="modal" class="mx-auto my-2 btn btn-info btn-lg col-md-3 float-right">Atualizar</button>
                                                </div>
                                            </div>
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
                                            <div id="formProduto02Edit">
                                                <div class="form-row">
                                                    <div class="form-group col">
                                                        <label for="tamanhoProduto02">Tamanhos</label>
                                                        <select class="form-control" name="tamanhoProduto02" id="tamanhoProduto02" form="carrinhoForm" required>
                                                            <option value="" disabled selected>--</option>
                                                            <?php $tamanhos = ["PP", "P", "M", "G", "GG"]; ?>
                                                            <?php foreach ($tamanhos as $tamanho) : ?>
                                                                <option value="<?= $tamanho ?>"><?= $tamanho ?></option>
                                                            <?php endforeach; ?>
                                                        </select>
                                                    </div>
                                                    <div class="form-group col">
                                                        <label for="quantidadeProduto02">Quantidade</label>
                                                        <input type="number" class="form-control" id="quantidadeProduto02" step="1" min="1" value="1" form="carrinhoForm" required>
                                                    </div>
                                                </div>
                                                <div class="form-group clearfix">
                                                    <button data-dismiss="modal" class="mx-auto my-2 btn btn-info btn-lg col-md-3 float-right">Atualizar</button>
                                                </div>
                                            </div>
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
                                            <div id="formProduto03Edit">
                                                <div class="form-row">
                                                    <div class="form-group col">
                                                        <label for="tamanhoProduto03">Tamanhos</label>
                                                        <select class="form-control" name="tamanhoProduto03" id="tamanhoProduto03" form="carrinhoForm" required>
                                                            <option value="" disabled selected>--</option>
                                                            <?php $tamanhos = ["PP", "P", "M", "G", "GG"]; ?>
                                                            <?php foreach ($tamanhos as $tamanho) : ?>
                                                                <option value="<?= $tamanho ?>"><?= $tamanho ?></option>
                                                            <?php endforeach; ?>
                                                        </select>
                                                    </div>
                                                    <div class="form-group col">
                                                        <label for="quantidadeProduto03">Quantidade</label>
                                                        <input type="number" class="form-control" id="quantidadeProduto03" step="1" min="1" value="1" form="carrinhoForm" required>
                                                    </div>
                                                </div>
                                                <div class="form-group clearfix">
                                                    <button data-dismiss="modal" class="mx-auto my-2 btn btn-info btn-lg col-md-3 float-right">Atualizar</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <!-- /Modal Produto 03 -->
                        </tr>
                    </tbody>
                </table>
                <div class="form-inline">
                    <div class="form-group col-md-6">
                        <label for="cupomDesconto" class="col-auto pl-0">Cupom de Desconto</label>
                        <div class="col-md-7">
                            <input type="text" class="form-control" name="cupomDesconto" id="cupomDesconto" placeholder="INSIRA SEU CUPOM">
                        </div>
                    </div>
                    <div class="form-group col-md-2 offset-4">
                        <button type="submit" class="btn btn-info" form="carrinhoForm">Finalizar Compra</button>
                    </div>
                </div>
            </form>
        </div>
        <section id="catMaisVendidos" class="row px-3 px-md-0 mb-5">
            <h2 class="col-12 text-center text-info mt-5 mb-4">Você também pode se interessar por...</h2>
            <div id="carrosselMaisVendidos" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators indicators-mais-vendidos">
                    <li data-target="#carrosselMaisVendidos" data-slide-to="0" class="bg-info active"></li>
                    <li data-target="#carrosselMaisVendidos" data-slide-to="1" class="bg-info"></li>
                    <li data-target="#carrosselMaisVendidos" data-slide-to="2" class="bg-info"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active" id="maisVendidos01">
                        <div class="card-deck">
                            <div class="card promo">
                                <img class="card-img-top" src="./assets/img/produto-01-440x440.jpg" alt="Card image cap">
                                <div class="card-body">
                                    <h4 class="card-title">Produto X1</h4>
                                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                </div>
                                <div class="card-footer">
                                    <p class="preco-vitrine text-info d-inline">R$ 99.99</p>
                                    <a href="produto.php" class="btn btn-info float-right">Comprar</a>
                                </div>
                                <span class="badge badge-pill badge-info">PROMO</span>
                            </div>
                            <div class="card d-none d-md-block">
                                <img class="card-img-top" src="./assets/img/produto-02-440x440.jpg" alt="Card image cap">
                                <div class="card-body">
                                    <h4 class="card-title">Produto X2</h4>
                                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                </div>
                                <div class="card-footer">
                                    <p class="preco-vitrine text-info d-inline">R$ 99.99</p>
                                    <a href="produto.php" class="btn btn-info float-right">Comprar</a>
                                </div>
                            </div>
                            <div class="card d-none d-md-block">
                                <img class="card-img-top" src="./assets/img/produto-03-440x440.jpg" alt="Card image cap">
                                <div class="card-body">
                                    <h4 class="card-title">Produto X3</h4>
                                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                </div>
                                <div class="card-footer">
                                    <p class="preco-vitrine text-info d-inline">R$ 99.99</p>
                                    <a href="produto.php" class="btn btn-info float-right">Comprar</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item" id="maisVendidos02">
                        <div class="card-deck">
                            <div class="card promo">
                                <img class="card-img-top" src="./assets/img/produto-04-440x440.jpg" alt="Card image cap">
                                <div class="card-body">
                                    <h4 class="card-title">Produto X1</h4>
                                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                </div>
                                <div class="card-footer">
                                    <p class="preco-vitrine text-info d-inline">R$ 99.99</p>
                                    <a href="produto.php" class="btn btn-info float-right">Comprar</a>
                                </div>
                                <span class="badge badge-pill badge-info">PROMO</span>
                            </div>
                            <div class="card d-none d-md-block">
                                <img class="card-img-top" src="./assets/img/produto-05-440x440.jpg" alt="Card image cap">
                                <div class="card-body">
                                    <h4 class="card-title">Produto X2</h4>
                                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                </div>
                                <div class="card-footer">
                                    <p class="preco-vitrine text-info d-inline">R$ 99.99</p>
                                    <a href="produto.php" class="btn btn-info float-right">Comprar</a>
                                </div>
                            </div>
                            <div class="card d-none d-md-block">
                                <img class="card-img-top" src="./assets/img/produto-06-440x440.jpg" alt="Card image cap">
                                <div class="card-body">
                                    <h4 class="card-title">Produto X3</h4>
                                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                </div>
                                <div class="card-footer">
                                    <p class="preco-vitrine text-info d-inline">R$ 99.99</p>
                                    <a href="produto.php" class="btn btn-info float-right">Comprar</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item" id="maisVendidos03">
                        <div class="card-deck">
                            <div class="card promo">
                                <img class="card-img-top" src="./assets/img/produto-07-440x440.jpg" alt="Card image cap">
                                <div class="card-body">
                                    <h4 class="card-title">Produto X1</h4>
                                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                </div>
                                <div class="card-footer">
                                    <p class="preco-vitrine text-info d-inline">R$ 99.99</p>
                                    <a href="produto.php" class="btn btn-info float-right">Comprar</a>
                                </div>
                                <span class="badge badge-pill badge-info">PROMO</span>
                            </div>
                            <div class="card d-none d-md-block">
                                <img class="card-img-top" src="./assets/img/produto-08-440x440.jpg" alt="Card image cap">
                                <div class="card-body">
                                    <h4 class="card-title">Produto X2</h4>
                                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                </div>
                                <div class="card-footer">
                                    <p class="preco-vitrine text-info d-inline">R$ 99.99</p>
                                    <a href="produto.php" class="btn btn-info float-right">Comprar</a>
                                </div>
                            </div>
                            <div class="card d-none d-md-block">
                                <img class="card-img-top" src="./assets/img/produto-01-440x440.jpg" alt="Card image cap">
                                <div class="card-body">
                                    <h4 class="card-title">Produto X3</h4>
                                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                </div>
                                <div class="card-footer">
                                    <p class="preco-vitrine text-info d-inline">R$ 99.99</p>
                                    <a href="produto.php" class="btn btn-info float-right">Comprar</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </section>
</main>
<?php require_once("./inc/footer.php"); ?>