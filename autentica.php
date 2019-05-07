<?php include("conecta.php");
session_start();
if(empty($_POST["login"] || $_POST["senha"])){
    header("location: login.php");
    exit();    
}
$login = mysqli_real_escape_string($conexao, $_POST["login"]);
$senha = mysqli_real_escape_string($conexao, $_POST["senha"]);

$query = "select * from aluno where login = '{$login}' and senha = md5('{$senha}')";
$result = mysqli_query($conexao, $query);
$row = mysqli_num_rows($result);
if($row == 1) {
	$_SESSION['login'] = $login;
	header('Location: home.php');
	exit();
} else {
	$_SESSION['nao_autenticado'] = true;
	header('Location: login.php');
	exit();
}
?>