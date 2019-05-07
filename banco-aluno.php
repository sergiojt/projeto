<?php
    function insereAluno($conexao, $nome, $idade, $endereco, $login, $senha, $curso){
        $query = "insert into aluno (nome, idade, endereco, login, senha, curso) values ('{$nome}', {$idade}, '{$endereco}', '{$login}', md5('{$senha}'), {$curso})";
        return mysqli_query($conexao, $query);
    }
function insereDiciplina($conexao, $login, $diciplina){
        $query = "insert into bancodiciplina (login, diciplina) values ('{$login}', '{$diciplina}')";
        return mysqli_query($conexao, $query);
    }


function listaCurso($conexao, $login) {
    $resultado = mysqli_query($conexao, "select a.*, c.curso from aluno as a join cursos as c on a.login = '{$login}' and a.curso = c.codcurso");
    return $resultado;
}

function listaDiciplina($conexao, $curso) {
    $resultado = mysqli_query($conexao, "select c.curso, d.diciplina from cursos as c join diciplinas as d on c.curso = '{$curso}' and c.codcurso = d.curso");
    return $resultado;
}
function validaDiciplina($conexao, $login, $diciplina){
    $resultado = mysqli_query($conexao, "select * from bancodiciplina where login = '{$login}' and diciplina = '{$diciplina}'");
    return $resultado;
    
}
function validaLogin($conexao, $login){
    $query = "select login from aluno where login = '{$login}'";
    $resultado = mysqli_query($conexao, $query);
    return $resultado;
}
function removeDiciplina($conexao, $diciplina, $login) {
    $query = "delete from bancodiciplina where login = '{$login}' and diciplina = '{$diciplina}'";
    return mysqli_query($conexao, $query);
}
function buscaAluno($conexao, $login) {
    $query = "select * from aluno where login = '{$login}'";
    $resultado = mysqli_query($conexao, $query);
    return mysqli_fetch_assoc($resultado);
}
function alteraPerfil($conexao, $nome, $idade, $endereco, $login, $senha) {
    $query = "update aluno set nome = '{$nome}', idade = {$idade}, endereco = '{$endereco}', senha = md5('{$senha}') where login = '{$login}'";
    return mysqli_query($conexao, $query);
}



