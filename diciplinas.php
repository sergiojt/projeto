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

<h2>Curso de <?=$curso["curso"];?>,<br/><br/>Adicione suas Diciplinas!<br/><br/></h2>
<table class="table table-striped table-bordered">

    <?php
        $diciplinas = listaDiciplina($conexao, $curso["curso"]);
        foreach($diciplinas as $diciplina){
            $validaDiciplina = validaDiciplina($conexao, $login, $diciplina['diciplina']);   
            $row = mysqli_num_rows($validaDiciplina);
            if($row == 0){
            ?>
            <tr>
                <td><?= $diciplina['diciplina'] ?></td>
                <td>
                    <form action="adiciona-diciplina.php" method="post">
                    <input type="hidden" name="diciplina" value="<?=$diciplina['diciplina']?>" />
                    <button class="btn btn-success">Adicionar</button>
                    </form>
                </td>
            </tr>
    <?php
            }
        }
    ?>
</table>

<?php include("rodape.php"); ?>