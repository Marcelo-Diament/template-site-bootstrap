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
    <section class="container">
        <section id="catX" class="row">
            <!-- Card Deck -->
            <h2 class="col-12 text-center text-info mt-5 mb-3">Categoria X</h2>
            <div class="card-deck">
                <div class="card">
                    <img class="card-img-top" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22222%22%20height%3D%22180%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20222%20180%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_17176456475%20text%20%7B%20fill%3Argba(255%2C255%2C255%2C.75)%3Bfont-weight%3Anormal%3Bfont-family%3AHelvetica%2C%20monospace%3Bfont-size%3A11pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_17176456475%22%3E%3Crect%20width%3D%22222%22%20height%3D%22180%22%20fill%3D%22%23777%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%2282.859375%22%20y%3D%2294.95%22%3E222x180%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" alt="Card image cap">
                    <div class="card-body">
                        <h4 class="card-title">Produto X1</h4>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    </div>
                    <div class="card-footer">
                        <span class="badge badge-pill badge-info">PROMO</span>
                    </div>
                </div>
                <div class="card">
                    <img class="card-img-top" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22222%22%20height%3D%22180%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20222%20180%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_17176456475%20text%20%7B%20fill%3Argba(255%2C255%2C255%2C.75)%3Bfont-weight%3Anormal%3Bfont-family%3AHelvetica%2C%20monospace%3Bfont-size%3A11pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_17176456475%22%3E%3Crect%20width%3D%22222%22%20height%3D%22180%22%20fill%3D%22%23777%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%2282.859375%22%20y%3D%2294.95%22%3E222x180%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" alt="Card image cap">
                    <div class="card-body">
                        <h4 class="card-title">Produto X2</h4>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    </div>
                    <div class="card-footer">
                        <span class="badge badge-pill badge-info">PROMO</span>
                    </div>
                </div>
                <div class="card">
                    <img class="card-img-top" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22222%22%20height%3D%22180%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20222%20180%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_17176456475%20text%20%7B%20fill%3Argba(255%2C255%2C255%2C.75)%3Bfont-weight%3Anormal%3Bfont-family%3AHelvetica%2C%20monospace%3Bfont-size%3A11pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_17176456475%22%3E%3Crect%20width%3D%22222%22%20height%3D%22180%22%20fill%3D%22%23777%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%2282.859375%22%20y%3D%2294.95%22%3E222x180%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" alt="Card image cap">
                    <div class="card-body">
                        <h4 class="card-title">Produto X3</h4>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    </div>
                    <div class="card-footer">
                        <span class="badge badge-pill badge-info">PROMO</span>
                    </div>
                </div>
            </div>
        </section>
        <section id="catY" class="row">
            <!-- Card Deck -->
            <h2 class="col-12 text-center text-info mt-5 mb-3">Categoria Y</h2>
            <div class="card-deck">
                <div class="card">
                    <img class="card-img-top" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22222%22%20height%3D%22180%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20222%20180%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_17176456475%20text%20%7B%20fill%3Argba(255%2C255%2C255%2C.75)%3Bfont-weight%3Anormal%3Bfont-family%3AHelvetica%2C%20monospace%3Bfont-size%3A11pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_17176456475%22%3E%3Crect%20width%3D%22222%22%20height%3D%22180%22%20fill%3D%22%23777%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%2282.859375%22%20y%3D%2294.95%22%3E222x180%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" alt="Card image cap">
                    <div class="card-body">
                        <h4 class="card-title">Produto Y1</h4>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    </div>
                    <div class="card-footer">
                        <span class="badge badge-pill badge-info">PROMO</span>
                    </div>
                </div>
                <div class="card">
                    <img class="card-img-top" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22222%22%20height%3D%22180%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20222%20180%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_17176456475%20text%20%7B%20fill%3Argba(255%2C255%2C255%2C.75)%3Bfont-weight%3Anormal%3Bfont-family%3AHelvetica%2C%20monospace%3Bfont-size%3A11pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_17176456475%22%3E%3Crect%20width%3D%22222%22%20height%3D%22180%22%20fill%3D%22%23777%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%2282.859375%22%20y%3D%2294.95%22%3E222x180%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" alt="Card image cap">
                    <div class="card-body">
                        <h4 class="card-title">Produto Y2</h4>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    </div>
                    <div class="card-footer">
                        <span class="badge badge-pill badge-info">PROMO</span>
                    </div>
                </div>
                <div class="card">
                    <img class="card-img-top" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22222%22%20height%3D%22180%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20222%20180%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_17176456475%20text%20%7B%20fill%3Argba(255%2C255%2C255%2C.75)%3Bfont-weight%3Anormal%3Bfont-family%3AHelvetica%2C%20monospace%3Bfont-size%3A11pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_17176456475%22%3E%3Crect%20width%3D%22222%22%20height%3D%22180%22%20fill%3D%22%23777%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%2282.859375%22%20y%3D%2294.95%22%3E222x180%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" alt="Card image cap">
                    <div class="card-body">
                        <h4 class="card-title">Produto Y3</h4>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    </div>
                    <div class="card-footer">
                        <span class="badge badge-pill badge-info">PROMO</span>
                    </div>
                </div>
            </div>
        </section>
    </section>
</main>
<!-- /main -->
<!-- footer -->
<?php require_once("./inc/footer.php"); ?>
<!-- /footer -->