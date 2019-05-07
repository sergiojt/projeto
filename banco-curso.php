<?php

function listaCurso($conexao) {
    $cursos = array();
    $query = "select * from cursos";
    $resultado = mysqli_query($conexao, $query);
    while($curso = mysqli_fetch_assoc($resultado)) {
        array_push($cursos, $curso);
    }
    return $cursos;
}


