<!-- head -->
<?php require_once("./inc/head.php"); ?>
<!-- /head -->
<!-- header -->
<?php require_once("./inc/header.php"); ?>
<!-- /header -->
<!-- main -->
<main class="container-fluid">
    <!-- Topo da página -->
    <header class="topo-pagina p-3 mb-5" id="topoCatExemplo">
        <h1 class="p-3">Categoria Exemplo</h1>
        <p class="px-3 pt-0 topo">Produtos pertencentes à categoria Exemplo, confira as promoções e produtos de primeira qualidade!</p>
    </header>
    <!-- /Topo da página -->
    <!-- Section das Categorias -->
    <section class="container">
        <!-- Aqui usamos um container dentro de um container-fluid para conferirmos as margens laterais para a vitrine de produtos por categoria -->
        <!-- Section Exemplo -->
        <!-- Section destinada à Exemplo, com classe row para podermos trabalhar com o grid de 12 colunas e usarmos as classes col-x, col-md-y, etc. -->
        <section id="catExemplo" class="row vitrine-categoria px-3 px-md-0">
            <!-- Row que contém cards dos produtos -->
            <div class="row justify-content-around">
                <!-- Card (nesse caso inclui a classe promo, para destacar produtos em promoção) -->
                <div class="card promo m-3">
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
                <div class="card m-3">
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
                <div class="card m-3">
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
                <!-- Card (nesse caso inclui a classe promo, para destacar produtos em promoção) -->
                <div class="card promo m-3">
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
                <div class="card m-3">
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
                <div class="card m-3">
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
                <!-- Card (nesse caso inclui a classe promo, para destacar produtos em promoção) -->
                <div class="card promo m-3">
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
                <div class="card m-3">
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
                <div class="card m-3">
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
                <!-- Card (nesse caso inclui a classe promo, para destacar produtos em promoção) -->
                <div class="card promo m-3">
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
                <div class="card m-3">
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
                <div class="card m-3">
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
                <!-- Banner Destaque 01 -->
                <div class="card m-3 p-3" id="bannerDestaque01">
                    <a href="./contato.php" title="Entre em contato conosco!" class="m-auto">
                        <h3 class="text-center">Entre em contato e solicite um orçamento para pedidos em grandes quantidades</h3>
                    </a>
                </div>
            </div>
            <!-- /Row que contém cards dos produtos -->
        </section>
        <!-- /Section Categoria Exemplo -->
    </section>
    <!-- /Section das Categorias -->
</main>
<!-- /main -->
<!-- footer -->
<?php require_once("./inc/footer.php"); ?>
<!-- /footer -->