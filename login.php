<?php include("cabecalho.php");
session_start(); 
?>
<form class="form-horizontal" action="autentica.php" method="POST">
    <?php
    if(isset($_SESSION['nao_autenticado'])){?>
        <div class="text-danger">
            <p>Usuario ou senha incorreto</p>
        </div>
    <?php
    }
    unset($_SESSION['nao_autenticado']);
    ?>
        
    <div class="form-group">
    <label for="login" class="col-sm-2 control-label">Login</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="login" placeholder="Login">
    </div>
  </div>
  <div class="form-group">
    <label for="senha" class="col-sm-2 control-label">Senha</label>
    <div class="col-sm-10">
      <input type="password" class="form-control" name="senha" placeholder="Senha">
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <h2><a href="CadastroAluno.php">Ainda não é cadastrado?</a></h2>
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-primary">Conectar</button>
    </div>
  </div>
</form>
<?php include("rodape.php")?> 