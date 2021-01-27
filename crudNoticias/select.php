<?php

include "conn.php";

$sql = mysqli_query($link, "SELECT * FROM noticias WHERE id = 1");

   if ($vetor = mysqli_fetch_array($sql)) {
        
        $titulo = $vetor['titulo'];
        $slug = $vetor['slug'];
        $descricao = $vetor['descricao'];
        $palavraschave = $vetor['palavras_chave'];
        $conteudo = $vetor['conteudo'];

        echo "<hr>";
        echo "<h3 style='font-size:2rem; margin-left: 1rem'> Título: </h3><br>";
        echo "<h3 style='font-size:1.8rem; margin-left: 5rem'>" . $titulo . "</h3><br>";
        echo "<h3 style='font-size:2rem; margin-left: 1rem'> Slug: </h3><br>";
        echo "<h3 style='font-size:1.8rem; margin-left: 5rem'>" . $slug . "</h3><br>";
        echo "<h3 style='font-size:2rem; margin-left: 1rem'> Descrição: </h3><br>";
        echo "<h3 style='font-size:1.8rem; margin-left: 5rem'>" . $descricao . "</h3><br>";
        echo "<h3 style='font-size:2rem; margin-left: 1rem'> Palavras-chave: </h3><br>";
        echo "<h3 style='font-size:1.8rem; margin-left: 5rem'>" . $palavraschave . "</h3><br>";
        echo "<h3 style='font-size:2rem; margin-left: 1rem'> Conteúdo: </h3><br>";
        echo "<h3 style='font-size:1.8rem; margin-left: 5rem'>" . $conteudo . "</h3><br>";   
    }
    
/* include "conn.php";

$cont = 0;

function procuraDados($cont) {

    $sql = mysqli_query($link, "SELECT * FROM noticias");

    if ($vetor = mysqli_fetch_array($sql)) {

        $titulo = $vetor[$cont];
        $slug = $vetor[$cont+1];
        $descricao = $vetor[$cont+2];
        $palavraschave = $vetor[$cont+3];
        $conteudo = $vetor[$cont+4];

        echo $titulo;
        echo $slug;
        echo $descricao;
        echo $palavraschave;
        echo $conteudo;
    }
}

    procuraDados($cont++); */
    
?>


