<?php include("cabecalho.php");
session_start();
include("verifica.php");
?>

<h2>Ola <?php echo $_SESSION['login'];?>,<br/><br/>Bem vindo ao Portal do Aluno!</h2>

<?php include("rodape.php"); ?>