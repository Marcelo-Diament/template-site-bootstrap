<?php require_once("./inc/head.php"); ?>
<?php require_once("./inc/header.php"); ?>
<main class="container-fluid">
    <header class="topo-pagina p-3 mb-5" id="topoProduto">
        <h1 class="p-3">Produto</h1>
        <p class="px-3 pt-0 topo">Produto ponta de linha, topzera! Não perca essa oportunidade - quem avisa amigo é!</p>
    </header>
    <section class="container my-3">
        <article class="row">
            <section class="col-md-5">
                <div id="carrosselProduto" class="carousel slide carousel-fade" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carrosselProduto" data-slide-to="0" class="bg-info active"></li>
                        <li data-target="#carrosselProduto" data-slide-to="1" class="bg-info"></li>
                        <li data-target="#carrosselProduto" data-slide-to="2" class="bg-info"></li>
                        <li data-target="#carrosselProduto" data-slide-to="3" class="bg-info"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active" id="produtoImg01">
                            <img src="./assets/img/produto-01-440x440.jpg" alt="Produto da hora!">
                        </div>
                        <div class="carousel-item" id="produtoImg02">
                            <img src="./assets/img/produto-02-440x440.jpg" alt="Produto da hora!">
                        </div>
                        <div class="carousel-item" id="produtoImg03">
                            <img src="./assets/img/produto-03-440x440.jpg" alt="Produto da hora!">
                        </div>
                        <div class="carousel-item" id="produtoImg04">
                            <img src="./assets/img/produto-04-440x440.jpg" alt="Produto da hora!">
                        </div>
                    </div>
                </div>
            </section>
            <section class="col-md-7 my-3">
                <h2>Produto Doideira</h2>
                <small>SKU 123-OIM4-ES9</small>
                <p class="my-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem iure, esse totam tenetur minima sapiente cum? At, voluptatem saepe. Voluptates adipisci culpa cum ullam soluta aliquid deleniti natus tenetur perferendis!</p>
                <form action="" method="post" id="formComprar">
                    <div class="form-row">
                        <div class="form-group col-md-3">
                            <label for="tamanho">Tamanhos</label>
                            <select class="form-control" name="tamanho" id="tamanho">
                                <option disabled selected>--</option>
                                <?php $tamanhos = ["PP", "P", "M", "G", "GG"]; ?>
                                <?php foreach ($tamanhos as $tamanho) : ?>
                                    <option value="<?= $tamanho ?>"><?= $tamanho ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-3">
                            <label for="quantidade">Quantidade</label>
                            <input type="number" class="form-control" id="quantidade" step="1" min="1" value="1">
                        </div>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="mx-auto my-2 btn btn-info btn-lg col-md-3">Comprar</button>
                    </div>
                </form>
            </section>
            <section class="col-12 my-5">
                <div class="accordion" id="accordionTabsProduto">
                    <div class="card">
                        <div class="card-header" id="aba01">
                            <h5 class="mb-0">
                                <button class="btn text-info bg-transparent col-12 collapsed" type="button" data-toggle="collapse" data-target="#especificacoes" aria-expanded="false" aria-controls="especificacoes">
                                    Especificações Técnicas <i class="fas fa-chevron-down ml-3 font-weight-light"></i>
                                </button>
                            </h5>
                        </div>
                        <div id="especificacoes" class="collapse" aria-labelledby="aba01" data-parent="#accordionTabsProduto">
                            <div class="card-body">
                                <table class="table my-3 text-center">
                                    <thead class="thead-light">
                                        <tr>
                                            <th scope="col">Tamanho</th>
                                            <th scope="col"><span class="d-none d-md-block">Largura</span><span class="d-block d-md-none">L</span></th>
                                            <th scope="col"><span class="d-none d-md-block">Profundidade</span><span class="d-block d-md-none">P</span></th>
                                            <th scope="col"><span class="d-none d-md-block">Comprimento</span><span class="d-block d-md-none">C</span></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row">PP</th>
                                            <td>30 cm</td>
                                            <td>30 cm</td>
                                            <td>30 cm</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">P</th>
                                            <td>35 cm</td>
                                            <td>35 cm</td>
                                            <td>35 cm</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">M</th>
                                            <td>40 cm</td>
                                            <td>40 cm</td>
                                            <td>40 cm</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">G</th>
                                            <td>45 cm</td>
                                            <td>45 cm</td>
                                            <td>45 cm</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">GG</th>
                                            <td>50 cm</td>
                                            <td>50 cm</td>
                                            <td>50 cm</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="aba02">
                            <h5 class="mb-0">
                                <button class="btn text-info bg-transparent col-12 collapsed" type="button" data-toggle="collapse" data-target="#faq" aria-expanded="false" aria-controls="faq">
                                    Dúvidas Frequentes <i class="fas fa-chevron-down ml-3 font-weight-light"></i>
                                </button>
                            </h5>
                        </div>
                        <div id="faq" class="collapse" aria-labelledby="aba02" data-parent="#accordionTabsProduto">
                            <div class="card-body">
                                <ul>
                                    <li>
                                        <h4>Dúvida 1</h4>
                                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aliquid, unde, id enim numquam, eum quod provident aliquam sit nobis temporibus optio voluptas voluptate quos cupiditate tenetur. Praesentium nam accusamus harum.</p>
                                    </li>
                                    <li>
                                        <h4>Dúvida 2</h4>
                                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aliquid, unde, id enim numquam, eum quod provident aliquam sit nobis temporibus optio voluptas voluptate quos cupiditate tenetur. Praesentium nam accusamus harum.</p>
                                    </li>
                                    <li>
                                        <h4>Dúvida 3</h4>
                                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aliquid, unde, id enim numquam, eum quod provident aliquam sit nobis temporibus optio voluptas voluptate quos cupiditate tenetur. Praesentium nam accusamus harum.</p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="aba03">
                            <h5 class="mb-0">
                                <button class="btn text-info bg-transparent col-12 collapsed" type="button" data-toggle="collapse" data-target="#garantiaETermos" aria-expanded="false" aria-controls="garantiaETermos">
                                    Garantia, Troca e Devolução <i class="fas fa-chevron-down ml-3 font-weight-light"></i>
                                </button>
                            </h5>
                        </div>
                        <div id="garantiaETermos" class="collapse" aria-labelledby="aba03" data-parent="#accordionTabsProduto">
                            <div class="card-body">
                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </article>
        <div class="card mt-3 my-md-5 mx-0 p-0" id="bannerDestaque01">
            <a href="./contato.php" title="Entre em contato conosco!" class="m-auto">
                <h3 class="text-center">Entre em contato e solicite um orçamento para pedidos em grandes quantidades</h3>
            </a>
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
                            <div class="card d-none d-md-block">
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
                            <div class="card d-none d-md-block">
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
                            <div class="card d-none d-md-block">
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
                            <div class="card d-none d-md-block">
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