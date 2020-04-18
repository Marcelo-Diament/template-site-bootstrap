<footer class="container-fluid mt-5 mb-0 mx-0 pt-5 px-0">
  <div class="bg-dark text-white mx-0 p-5">
    <div class="d-flex flex-row flex-nowrap justify-content-center redes-sociais">
      <a href="#" target="_blank" title="Acesse nosso Insta"><i class="fab fa-instagram mr-2"></i></a>
      <a href="#" target="_blank" title="Acesse nosso Face"><i class="fab fa-facebook mr-2"></i></a>
      <a href="#" target="_blank" title="Acesse nosso Twitter"><i class="fab fa-twitter mr-2"></i></a>
      <a href="#" target="_blank" title="Acesse nosso Pinterest"><i class="fab fa-pinterest mr-2"></i></a>
    </div>
    <div class="d-flex flex-row flex-nowrap justify-content-center mt-3">
      <small>Fulanos &copy; | CNPJ 01.012.012/0001-99</small>
    </div>
  </div>
</footer>
<!-- Modal Login -->
<div class="modal fade mt-5" id="modalLogin" tabindex="-1" role="dialog" aria-labelledby="modalLoginLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div id="carrosselModalLogin" class="carousel slide carousel-fade" data-interval="false">
      <div class="carousel-inner">
        <div class="carousel-item h-auto active" id="carrosselLoginItem">
          <div class="modal-content" id="modalContentLogin">
            <div class="modal-header">
              <h5 class="modal-title" id="modalLoginLabel">Login</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form action="" method="post" id="formLogin">
                <div class="form-group">
                  <label for="emailLogin">email</label>
                  <input type="email" class="form-control" id="emailLogin" aria-describedby="emailLoginHelp" placeholder="Insira seu email">
                  <small id="emailLoginHelp" class="form-text text-muted">Não se preocupe, não vendemos mailing lists.</small>
                </div>
                <div class="form-group">
                  <label for="senhaLogin">Senha</label>
                  <input type="password" class="form-control" id="senhaLogin" placeholder="Insira sua senha" aria-describedby="senhaLoginHelp" autocomplete>
                  <small id="senhaLoginHelp" class="form-text text-muted">Insira uma maiúscula, uma minúscula e um número pelo menos.</small>
                </div>
                <div class="form-group form-check">
                  <input type="checkbox" class="form-check-input" id="aceiteLogin" checked>
                  <label class="form-check-label" for="aceiteLogin">Estou de acordo com os termos, pode vender meus dados!</label>
                </div>
                <div class="form-group col-auto clearfix px-0">
                  <button type="submit" class="btn btn-info float-right ml-2">Logar</button>
                  <button type="reset" class="btn btn-secondary float-right">Limpar</button>
                </div>
              </form>
            </div>
            <div class="modal-footer">
              <a href="#carrosselModalLogin" class="text-info" role="button" data-slide="next">
                <small class="d-block w-100 text-muted">Ops! Ainda não tenho conta, quero <span class="text-info">me cadastrar</span>.</small>
              </a>
            </div>
          </div>
        </div>
        <div class="carousel-item h-auto" id="carrosselCadastroItem">
          <div class="modal-content" id="modalContentCadastro">
            <div class="modal-header">
              <h5 class="modal-title" id="modalCadastroLabel">Cadastro</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form action="" method="post" id="formCadastro">
                <div class="form-group">
                  <label for="emailCadastro">email</label>
                  <input type="email" class="form-control" id="emailCadastro" aria-describedby="emailCadastroHelp" placeholder="Insira seu email">
                  <small id="emailCadastroHelp" class="form-text text-muted">Não se preocupe, não vendemos mailing lists.</small>
                </div>
                <div class="form-group">
                  <label for="senhaCadastro">Senha</label>
                  <input type="password" class="form-control" id="senhaCadastro" placeholder="Insira sua senha" aria-describedby="senhaCadastroHelp" autocomplete>
                  <small id="senhaCadastroHelp" class="form-text text-muted">Insira uma maiúscula, uma minúscula e um número pelo menos.</small>
                </div>
                <div class="form-group form-check">
                  <input type="checkbox" class="form-check-input" id="aceiteCadastro" checked>
                  <label class="form-check-label" for="aceiteCadastro">Estou de acordo com os termos, pode vender meus dados!</label>
                </div>
                <div class="form-group col-auto clearfix px-0">
                  <button type="submit" class="btn btn-info float-right ml-2">Cadastrar</button>
                  <button type="reset" class="btn btn-secondary float-right">Limpar</button>
                </div>
              </form>
            </div>
            <div class="modal-footer">
              <a href="#carrosselModalLogin" class="text-info" role="button" data-slide="prev">
                <small class="d-block w-100 text-muted">Ops! Já tenho conta, quero <span class="text-info">me logar</span>.</small>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- /Modal Login -->

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>

</html>