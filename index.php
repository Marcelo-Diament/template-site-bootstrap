<?php require_once("./inc/head.php"); ?>
<?php require_once("./inc/header.php"); ?>
<main class="container-fluid">
    <div id="carrosselBootstrap" class="carousel slide carousel-fade" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carrosselBootstrap" data-slide-to="0" class="active"></li>
            <li data-target="#carrosselBootstrap" data-slide-to="1"></li>
            <li data-target="#carrosselBootstrap" data-slide-to="2"></li>
            <li data-target="#carrosselBootstrap" data-slide-to="3"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active" id="banner01">
                <div class="carousel-caption">
                    <h2>Título 1</h2>
                    <p>Descrição 1</p>
                </div>
            </div>
            <div class="carousel-item" id="banner02">
                <div class="carousel-caption">
                    <h2>Título 2</h2>
                    <p>Descrição 2</p>
                </div>
            </div>
            <div class="carousel-item" id="banner03">
                <div class="carousel-caption">
                    <h2>Título 3</h2>
                    <p>Descrição 3</p>
                </div>
            </div>
            <div class="carousel-item" id="banner04">
                <div class="carousel-caption">
                    <h2>Título 4</h2>
                    <p>Descrição 4</p>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carrosselBootstrap" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Anterior</span>
        </a>
        <a class="carousel-control-next" href="#carrosselBootstrap" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Próximo</span>
        </a>
    </div>
    <section class="container">
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