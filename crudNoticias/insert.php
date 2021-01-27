<?php

include "conn.php";

$titulo = $_POST['titulo'];
$slug = $_POST['slug'];
$descricao = $_POST['descricao'];
$palavraschave = $_POST['palavraschave'];
$conteudo = $_POST['conteudo'];

mysqli_query($link, "INSERT INTO noticias(titulo,slug,descricao,palavras_chave,conteudo) VALUES ('{$titulo}','{$slug}','{$descricao}','{$palavraschave}','{$conteudo}')");
header('location:index.php');