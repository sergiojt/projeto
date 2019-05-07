<?php include("cabecalho.php");
include("conecta.php");
include("banco-curso.php");
$cursos = listaCurso($conexao);
?> 
		 <h1>Cadastro Aluno</h1>
<form action="adicionaAluno.php" method="post">
     <table class="table">
		<tr>
			<td>Nome</td>
			<td><input class ="form-control" type="text" name="nome"><br/></td>
		</tr>
		<tr>
			<td>Idade:</td>
			<td><input class ="form-control" type="number" name="idade"><br/></td>
	    </tr>
         <tr>
			<td>Endereço:</td>
             <td><input class="form-control" type="text" name="endereco"><br/></td>
	    </tr>
         <tr>
            <td>Curso:</td>
            <td>
                <select class="form-control" name="curso_id">
                    <?php foreach($cursos as $curso) : ?>
                        <option value="<?=$curso['codcurso']?>"><?=$curso['curso']?></option>
                    <?php endforeach ?>
                </select>
            </td>
        </tr>
         <tr>
			<td>Login:</td>
             <td><input class="form-control" type="text" name="login"><br/></td>
	    </tr>
         <tr>
			<td>Senha:</td>
             <td><input class="form-control" type="password" name="senha"><br/></td>
	    </tr>
		<tr>
			<td>
				<input class="btn btn-primary" type="submit" value="cadastrar">
            </td>		
		</tr> 
	</table>
</form>
<?php include("rodape.php")?>