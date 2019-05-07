<?php
include("cabecalho.php");
include("conecta.php");
include("banco-aluno.php");
session_start();
$diciplina = $_POST["diciplina"];
$login = $_SESSION['login'];
echo $login;
echo $diciplina;
$resultado = removeDiciplina($conexao, $diciplina, $login);
header('Location: minhasdiciplinas.php');
exit();?>