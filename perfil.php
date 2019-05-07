<?php include("cabecalho.php");
session_start();
include("verifica.php");
include("banco-aluno.php");
include("conecta.php");

$login = $_SESSION['login'];
$perfil = buscaAluno($conexao, $login);
?>
<h1>Alterando Perfil</h1>
<form action="altera-perfil.php" method="post">
    <input type="hidden" name="id" value="<?=$perfil['codaluno']?>" />
    <table class="table">
        <tr>
            <td>Nome</td>
            <td><input class="form-control" type="text" name="nome" value="<?=$perfil['nome']?>" /></td>
        </tr>
        <tr>
            <td>Idade</td>
            <td><input class="form-control" type="number" name="idade" value="<?=$perfil['idade']?>" /></td>
        </tr>
        <tr>
            <td>Endereço</td>
            <td><input class="form-control" type="text" name="endereco" value="<?=$perfil['endereco']?>" /></td>
        </tr>
        <tr>
            <td>Senha</td>
            <td><input class="form-control" type="password" name="senha" /></td>
        </tr>
        <tr>
            <td><button class="btn btn-primary" type="submit">Alterar</button></td>
        </tr>
    </table>
</form>

<?php include("rodape.php"); ?>
