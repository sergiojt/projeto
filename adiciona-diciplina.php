<?php
include("cabecalho.php");
include("conecta.php");
include("banco-aluno.php");
session_start();
$diciplina = $_POST["diciplina"];
$login = $_SESSION['login'];
$resultado = insereDiciplina($conexao, $login, $diciplina);
header('Location: diciplinas.php');
exit();
