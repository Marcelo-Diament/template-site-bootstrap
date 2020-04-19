<?php require_once("./inc/head.php"); ?>
<?php require_once("./inc/header.php"); ?>
<main class="container-fluid">
    <header class="topo-pagina p-3 mb-5" id="topoErro">
        <h1 class="p-3">Erro 404</h1>
        <p class="px-3 pt-0 topo">Ixi... a página procurada não existe...</p>
    </header>
    <section class="container my-3">
        <div class="row">
            <article class="col-12" id="erro404">
                <i class="fad fa-bug col-12 text-center text-info"></i>
                <h2 class="col-12 text-center text-info mt-5 mb-4">Ops!</h2>
                <p class="mb-5 text-center">Desculpe, mas não encontramos a página buscada... tente navegar pelo menu acima.</p>
                <p class="mb-5 text-center">Ou confira os lindos produtos que separamos para te mostrar! =)</p>
            </article>
        </div>
        <section id="catMaisVendidos" class="row px-3 px-md-0 mb-5">
            <h2 class="col-12 text-center text-info mt-5 mb-4">Mais Vendidos</h2>
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
                            <div class="card">
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
                            <div class="card">
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
                            <div class="card">
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
                            <div class="card">
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
                            <div class="card">
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
                            <div class="card">
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
        <section id="catMaisProcurados" class="row px-3 px-md-0 mb-5">
            <h2 class="col-12 text-center text-info mt-5 mb-4">Mais Procurados</h2>
            <div id="carrosselMaisProcurados" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators indicators-mais-procurados">
                    <li data-target="#carrosselMaisProcurados" data-slide-to="0" class="bg-info active"></li>
                    <li data-target="#carrosselMaisProcurados" data-slide-to="1" class="bg-info"></li>
                    <li data-target="#carrosselMaisProcurados" data-slide-to="2" class="bg-info"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active" id="maisProcurados01">
                        <div class="card-deck">
                            <div class="card promo">
                                <img class="card-img-top" src="./assets/img/produto-08-440x440.jpg" alt="Card image cap">
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
                            <div class="card">
                                <img class="card-img-top" src="./assets/img/produto-07-440x440.jpg" alt="Card image cap">
                                <div class="card-body">
                                    <h4 class="card-title">Produto X2</h4>
                                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                </div>
                                <div class="card-footer">
                                    <p class="preco-vitrine text-info d-inline">R$ 99.99</p>
                                    <a href="produto.php" class="btn btn-info float-right">Comprar</a>
                                </div>
                            </div>
                            <div class="card">
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
                    <div class="carousel-item" id="maisProcurados02">
                        <div class="card-deck">
                            <div class="card promo">
                                <img class="card-img-top" src="./assets/img/produto-05-440x440.jpg" alt="Card image cap">
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
                            <div class="card">
                                <img class="card-img-top" src="./assets/img/produto-04-440x440.jpg" alt="Card image cap">
                                <div class="card-body">
                                    <h4 class="card-title">Produto X2</h4>
                                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                </div>
                                <div class="card-footer">
                                    <p class="preco-vitrine text-info d-inline">R$ 99.99</p>
                                    <a href="produto.php" class="btn btn-info float-right">Comprar</a>
                                </div>
                            </div>
                            <div class="card">
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
                    <div class="carousel-item" id="maisProcurados03">
                        <div class="card-deck">
                            <div class="card promo">
                                <img class="card-img-top" src="./assets/img/produto-02-440x440.jpg" alt="Card image cap">
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
                            <div class="card">
                                <img class="card-img-top" src="./assets/img/produto-01-440x440.jpg" alt="Card image cap">
                                <div class="card-body">
                                    <h4 class="card-title">Produto X2</h4>
                                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                </div>
                                <div class="card-footer">
                                    <p class="preco-vitrine text-info d-inline">R$ 99.99</p>
                                    <a href="produto.php" class="btn btn-info float-right">Comprar</a>
                                </div>
                            </div>
                            <div class="card">
                                <img class="card-img-top" src="./assets/img/produto-08-440x440.jpg" alt="Card image cap">
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