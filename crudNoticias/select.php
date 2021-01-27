<?php

include "conn.php";

$sql = mysqli_query($link, "SELECT * FROM noticias");

   while ($vetor = mysqli_fetch_array($sql)) {
        
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

?>


