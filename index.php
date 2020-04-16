<!-- head -->
<?php require_once("./inc/head.php"); ?>
<!-- /head -->
<!-- header -->
<?php require_once("./inc/header.php"); ?>
<!-- /header -->
<!-- main -->
<main class="container-fluid">
    <!-- Carrossel Bootstrap -->
    <div id="carrosselBootstrap" class="carousel slide" data-ride="carousel">
        <!-- Indicadores -->
        <ol class="carousel-indicators">
            <li data-target="#carrosselBootstrap" data-slide-to="0" class="active"></li>
            <li data-target="#carrosselBootstrap" data-slide-to="1"></li>
            <li data-target="#carrosselBootstrap" data-slide-to="2"></li>
            <li data-target="#carrosselBootstrap" data-slide-to="3"></li>
        </ol>
        <!-- /Indicadores -->
        <!-- Banners -->
        <div class="carousel-inner">
            <!-- Banner 01 -->
            <div class="carousel-item active" id="banner01">
                <div class="carousel-caption">
                    <h2>Título 1</h2>
                    <p>Descrição 1</p>
                </div>
            </div>
            <!-- /Banner 01 -->
            <!-- Banner 02 -->
            <div class="carousel-item" id="banner02">
                <div class="carousel-caption">
                    <h2>Título 2</h2>
                    <p>Descrição 2</p>
                </div>
            </div>
            <!-- /Banner 02 -->
            <!-- Banner 03 -->
            <div class="carousel-item" id="banner03">
                <div class="carousel-caption">
                    <h2>Título 3</h2>
                    <p>Descrição 3</p>
                </div>
            </div>
            <!-- /Banner 03 -->
            <!-- Banner 04 -->
            <div class="carousel-item" id="banner04">
                <div class="carousel-caption">
                    <h2>Título 4</h2>
                    <p>Descrição 4</p>
                </div>
            </div>
            <!-- /Banner 04 -->
        </div>
        <!-- /Banners -->
        <!-- Controls (setinhas) -->
        <!-- Seta Anterior -->
        <a class="carousel-control-prev" href="#carrosselBootstrap" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Anterior</span><!--  A classe sr-only significa screen readers only, ou seja, quem usar leitor de tela ouvirá que essa seta é para ir para o slide anterior -->
        </a>
        <!-- /Seta Anterior -->
        <!-- Seta Próximo -->
        <a class="carousel-control-next" href="#carrosselBootstrap" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Próximo</span><!--  A classe sr-only significa screen readers only, ou seja, quem usar leitor de tela ouvirá que essa seta é para ir para o próximo slide -->
        </a>
        <!-- /Seta Próximo -->
        <!-- /Controls (setinhas) -->
    </div>
    <!-- /Carrossel Bootstrap -->
    <!-- Section das Categorias -->
    <section class="container">
        <!-- Aqui usamos um container dentro de um container-fluid para conferirmos as margens laterais para a vitrine de produtos por categoria -->
        <!-- Section Mais Vendidos -->
        <!-- Section destinada à Mais Vendidos, com classe row para podermos trabalhar com o grid de 12 colunas e usarmos as classes col-x, col-md-y, etc. -->
        <section id="catMaisVendidos" class="row">
            <!-- Título da categoria (h2) -->
            <h2 class="col-12 text-center text-info mt-5 mb-4">Mais Vendidos</h2><!-- col-12 preenche as 12 colunas do grid, text-center centraliza o texto, text-info confere a cor verde ao texto e mt e mb são os margin top e bottom -->
            <!-- Card Deck -->
            <div class="card-deck">
                <!-- card-deck é uma classe padrão para tornar o elemento um container de cards com espaçamento entre eles -->
                <!-- Card (nesse caso inclui a classe promo, para destacar produtos em promoção) -->
                <div class="card promo">
                    <!-- Imagem de topo do Card -->
                    <img class="card-img-top" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22222%22%20height%3D%22180%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20222%20180%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_17176456475%20text%20%7B%20fill%3Argba(255%2C255%2C255%2C.75)%3Bfont-weight%3Anormal%3Bfont-family%3AHelvetica%2C%20monospace%3Bfont-size%3A11pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_17176456475%22%3E%3Crect%20width%3D%22222%22%20height%3D%22180%22%20fill%3D%22%23777%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%2282.859375%22%20y%3D%2294.95%22%3E222x180%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" alt="Card image cap">
                    <!-- Card Body -->
                    <div class="card-body">
                        <!-- Título do Produto -->
                        <h4 class="card-title">Produto X1</h4>
                        <!-- /Título do Produto -->
                        <!-- Descrição do Produto -->
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        <!-- /Descrição do Produto -->
                    </div>
                    <!-- Card /Body -->
                    <!-- Card Footer -->
                    <div class="card-footer">
                        <p class="preco-vitrine text-bold text-info d-inline">R$ 99.99</p>
                        <a href="produto.php" class="btn btn-info float-right">Comprar</a>
                    </div>
                    <!-- /Card Footer -->
                    <span class="badge badge-pill badge-info">PROMO</span><!-- Incluindo a badge usada para destacar produtos em promoção -->
                </div>
                <!-- /Card -->
                <!-- Card -->
                <div class="card">
                    <img class="card-img-top" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22222%22%20height%3D%22180%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20222%20180%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_17176456475%20text%20%7B%20fill%3Argba(255%2C255%2C255%2C.75)%3Bfont-weight%3Anormal%3Bfont-family%3AHelvetica%2C%20monospace%3Bfont-size%3A11pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_17176456475%22%3E%3Crect%20width%3D%22222%22%20height%3D%22180%22%20fill%3D%22%23777%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%2282.859375%22%20y%3D%2294.95%22%3E222x180%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" alt="Card image cap">
                    <div class="card-body">
                        <h4 class="card-title">Produto X2</h4>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    </div>
                    <div class="card-footer">
                        <p class="preco-vitrine text-bold text-info d-inline">R$ 99.99</p>
                        <a href="produto.php" class="btn btn-info float-right">Comprar</a>
                    </div>
                </div>
                <!-- /Card -->
                <!-- Card -->
                <div class="card">
                    <img class="card-img-top" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22222%22%20height%3D%22180%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20222%20180%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_17176456475%20text%20%7B%20fill%3Argba(255%2C255%2C255%2C.75)%3Bfont-weight%3Anormal%3Bfont-family%3AHelvetica%2C%20monospace%3Bfont-size%3A11pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_17176456475%22%3E%3Crect%20width%3D%22222%22%20height%3D%22180%22%20fill%3D%22%23777%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%2282.859375%22%20y%3D%2294.95%22%3E222x180%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" alt="Card image cap">
                    <div class="card-body">
                        <h4 class="card-title">Produto X3</h4>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    </div>
                    <div class="card-footer">
                        <p class="preco-vitrine text-bold text-info d-inline">R$ 99.99</p>
                        <a href="produto.php" class="btn btn-info float-right">Comprar</a>
                    </div>
                </div>
                <!-- /Card -->
            </div>
        </section>
        <!-- /Section Categoria Mais Vendidos -->
        <!-- Section Mais Procurados -->
        <!-- Section destinada à Mais Procurados, com classe row para podermos trabalhar com o grid de 12 colunas e usarmos as classes col-x, col-md-y, etc. -->
        <section id="catMaisProcurados" class="row">
            <!-- Título da categoria (h2) -->
            <h2 class="col-12 text-center text-info mt-5 mb-4">Mais Procurados</h2><!-- col-12 preenche as 12 colunas do grid, text-center centraliza o texto, text-info confere a cor verde ao texto e mt e mb são os margin top e bottom -->
            <!-- Card Deck -->
            <div class="card-deck">
                <!-- card-deck é uma classe padrão para tornar o elemento um container de cards com espaçamento entre eles -->
                <!-- Card (nesse caso inclui a classe promo, para destacar produtos em promoção) -->
                <div class="card promo">
                    <!-- Imagem de topo do Card -->
                    <img class="card-img-top" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22222%22%20height%3D%22180%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20222%20180%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_17176456475%20text%20%7B%20fill%3Argba(255%2C255%2C255%2C.75)%3Bfont-weight%3Anormal%3Bfont-family%3AHelvetica%2C%20monospace%3Bfont-size%3A11pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_17176456475%22%3E%3Crect%20width%3D%22222%22%20height%3D%22180%22%20fill%3D%22%23777%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%2282.859375%22%20y%3D%2294.95%22%3E222x180%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" alt="Card image cap">
                    <!-- Card Body -->
                    <div class="card-body">
                        <!-- Título do Produto -->
                        <h4 class="card-title">Produto X1</h4>
                        <!-- /Título do Produto -->
                        <!-- Descrição do Produto -->
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        <!-- /Descrição do Produto -->
                    </div>
                    <!-- Card /Body -->
                    <!-- Card Footer -->
                    <div class="card-footer">
                        <p class="preco-vitrine text-bold text-info d-inline">R$ 99.99</p>
                        <a href="produto.php" class="btn btn-info float-right">Comprar</a>
                    </div>
                    <!-- /Card Footer -->
                    <span class="badge badge-pill badge-info">PROMO</span><!-- Incluindo a badge usada para destacar produtos em promoção -->
                </div>
                <!-- /Card -->
                <!-- Card -->
                <div class="card">
                    <img class="card-img-top" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22222%22%20height%3D%22180%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20222%20180%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_17176456475%20text%20%7B%20fill%3Argba(255%2C255%2C255%2C.75)%3Bfont-weight%3Anormal%3Bfont-family%3AHelvetica%2C%20monospace%3Bfont-size%3A11pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_17176456475%22%3E%3Crect%20width%3D%22222%22%20height%3D%22180%22%20fill%3D%22%23777%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%2282.859375%22%20y%3D%2294.95%22%3E222x180%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" alt="Card image cap">
                    <div class="card-body">
                        <h4 class="card-title">Produto X2</h4>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    </div>
                    <div class="card-footer">
                        <p class="preco-vitrine text-bold text-info d-inline">R$ 99.99</p>
                        <a href="produto.php" class="btn btn-info float-right">Comprar</a>
                    </div>
                </div>
                <!-- /Card -->
                <!-- Card -->
                <div class="card">
                    <img class="card-img-top" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22222%22%20height%3D%22180%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20222%20180%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_17176456475%20text%20%7B%20fill%3Argba(255%2C255%2C255%2C.75)%3Bfont-weight%3Anormal%3Bfont-family%3AHelvetica%2C%20monospace%3Bfont-size%3A11pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_17176456475%22%3E%3Crect%20width%3D%22222%22%20height%3D%22180%22%20fill%3D%22%23777%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%2282.859375%22%20y%3D%2294.95%22%3E222x180%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" alt="Card image cap">
                    <div class="card-body">
                        <h4 class="card-title">Produto X3</h4>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    </div>
                    <div class="card-footer">
                        <p class="preco-vitrine text-bold text-info d-inline">R$ 99.99</p>
                        <a href="produto.php" class="btn btn-info float-right">Comprar</a>
                    </div>
                </div>
                <!-- /Card -->
            </div>
        </section>
        <!-- /Section Categoria Mais Procurados -->
    </section>
    <!-- /Section das Categorias -->
</main>
<!-- /main -->
<!-- footer -->
<?php require_once("./inc/footer.php"); ?>
<!-- /footer -->