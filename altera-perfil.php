<?php include("cabecalho.php");
session_start();
include("verifica.php");
include("banco-aluno.php");
include("conecta.php");

$nome = $_POST["nome"];
$idade = $_POST["idade"];
$endereco = $_POST["endereco"];
$login = $_SESSION['login'];
$senha = $_POST["senha"];
if(empty($nome)){?>
    <div class="alert alert-danger" role="alert">
        Preencha o campo Nome!
    </div>
    <div >
      <a href="perfil.php">Voltar</a>
    </div>
<?php 
}else if(empty($idade)){?>
    <div class="alert alert-danger" role="alert">
        Preencha o campo Idade!
    </div>
    <div >
      <a href="perfil.php">Voltar</a>
    </div>
<?php
    
}else if(empty($endereco)){?>
   <div class="alert alert-danger" role="alert">
        Preencha o campo Endereço!
    </div>
    <div >
      <a href="perfil.php">Voltar</a>
    </div>
<?php    
}else if(empty($senha)){?>
     <div class="alert alert-danger" role="alert">
        Preencha o campo Senha!
    </div>
    <div >
      <a href="perfil.php">Voltar</a>
    </div>
<?php 
}else{
    $resultado = alteraPerfil($conexao, $nome, $idade, $endereco, $login, $senha);
    header('Location: logout.php');
}?>