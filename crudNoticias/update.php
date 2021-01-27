<?php

include "conn.php";

$tituloupdate = $_POST['tituloupdate'];
$slugupdate = $_POST['slugupdate'];
$descricaoupdate = $_POST['descricaoupdate'];
$palavraschaveupdate = $_POST['palavraschaveupdate'];
$conteudoupdate = $_POST['conteudoupdate'];
$consultaupdate = $_POST['consultaupdate'];

mysqli_query($link, "UPDATE noticias SET titulo = '{$tituloupdate}',slug = '{$slugupdate}',descricao = '{$descricaoupdate}',palavras_chave = '{$palavraschaveupdate}',conteudo = '{$conteudoupdate}' WHERE id = '$consultaupdate'");
header('location:index.php');