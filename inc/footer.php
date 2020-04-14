<footer>

</footer>
<!-- Modal Login -->
<div class="modal fade" id="modalLogin" tabindex="-1" role="dialog" aria-labelledby="modalLoginLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalLoginLabel">Login</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="" method="post">

          <div class="form-group">
            <label for="email">email</label>
            <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Insira seu email">
            <small id="emailHelp" class="form-text text-muted">Não se preocupe, não vendemos mailing lists.</small>
          </div>
          <div class="form-group">
            <label for="senha">Password</label>
            <input type="password" class="form-control" id="senha" placeholder="Insira sua senha" aria-describedby="passwordHelp">
            <small id="passwordHelp" class="form-text text-muted">Insira uma maiúscula, uma minúscula e um número pelo menos.</small>
          </div>
          <div class="form-group form-check">
            <input type="checkbox" class="form-check-input" id="aceite">
            <label class="form-check-label" for="aceite">Estou de acordo com os termos, pode vender meus dados!</label>
          </div>
          </form>
          <small class="d-block w-100 text-muted">Ops! Ainda não tenho conta, quero <a href="cadastro.php" class="text-info">me cadastrar</a>.</small>
        </div>
        <div class="modal-footer">
          <button type="reset" class="btn btn-secondary">Limpar</button>
          <button type="submit" class="btn btn-info">Logar</button>
          
        </div>
      
    </div>
  </div>
</div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>

</html>