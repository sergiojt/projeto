<?php include("cabecalho.php");
include("conecta.php");
include("banco-aluno.php");    

$nome = $_POST["nome"];
$idade = $_POST["idade"];
$endereco = $_POST["endereco"];
$login = $_POST["login"];
$senha = $_POST["senha"];
$curso = $_POST["curso_id"];
$resultado = validaLogin($conexao, $login);
$row = mysqli_num_rows($resultado);
if(empty($nome)){?>
    <div class="alert alert-danger" role="alert">
        Preencha o campo Nome!
    </div>
    <div >
      <a href="cadastroAluno.php">Voltar</a>
    </div>
<?php 
}else if(empty($idade)){?>
    <div class="alert alert-danger" role="alert">
        Preencha o campo Idade!
    </div>
    <div >
      <a href="cadastroAluno.php">Voltar</a>
    </div>
<?php
    
}else if(empty($endereco)){?>
   <div class="alert alert-danger" role="alert">
        Preencha o campo Endereço!
    </div>
    <div >
      <a href="cadastroAluno.php">Voltar</a>
    </div>
<?php    
}else if(empty($login)){?>
     <div class="alert alert-danger" role="alert">
        Preencha o campo Login!
    </div>
    <div >
      <a href="cadastroAluno.php">Voltar</a>
    </div>
<?php 
    
}else if($row == 1){?>
     <div class="alert alert-danger" role="alert">
        Usuario existente!
    </div>
    <div >
      <a href="cadastroAluno.php">Voltar</a>
    </div>
<?php 
}else if(empty($senha)){?>
     <div class="alert alert-danger" role="alert">
        Preencha o campo Senha!
    </div>
    <div >
      <a href="cadastroAluno.php">Voltar</a>
    </div>
<?php 
    
}else{
    insereAluno($conexao, $nome, $idade, $endereco, $login, $senha, $curso);?>
    <a href="login.php"><p class="text-success">adicionado com sucesso!</p></a> <?php
}
?>