<?php include("cabecalho.php");
session_start();
include("verifica.php");
include("banco-aluno.php");
include("conecta.php");

$login = $_SESSION['login'];
$resultado = listaCurso($conexao, $login);
foreach($resultado as $curso){
} 

?>

<h2>Curso de <?=$curso["curso"];?>,<br/><br/>Minhas Diciplinas!<br/><br/></h2>
<table class="table table-striped table-bordered">

    <?php
        $diciplinas = listaDiciplina($conexao, $curso["curso"]);
        foreach($diciplinas as $diciplina){
            $validaDiciplina = validaDiciplina($conexao, $login, $diciplina['diciplina']);  
            $row = mysqli_num_rows($validaDiciplina);
            if($row == 1){
            ?>
            <tr>
                <td><?= $diciplina['diciplina'] ?></td>
                <td>
                    <form action="remove-diciplina.php" method="post">
                    <input type="hidden" name="diciplina" value="<?=$diciplina['diciplina']?>" />
                    <button class="btn btn-danger">Remover</button>
                    </form>
                </td>
            </tr>
    <?php
            }
        }
    ?>
</table>

<?php include("rodape.php"); ?>