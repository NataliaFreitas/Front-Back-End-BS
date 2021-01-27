<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Página inicial</title>
</head>
<body>

    <!-- Ações -->

    <header class="cabecalho">
        <h1 class="titulo">
            Últimas notícias
        </h1>
        <div class="botoes">
            <button type="button" class="criar btn btn-lg"><a href="insert_form.php">Criar Notícia</a></button>
            <button type="button" class="alterar btn btn-lg"><a href="update_form.php">Alterar Notícia</a></button>
            <button type="button" class="deletar btn btn-lg"><a href="delete_form.php">Excluir Notícia</a></button>
            <button type="button" class="pesquisar btn btn-lg"><a href="select_form.php">Pesquisar</a></button>
        </div>
    </header>

    <!-- Notícias -->
    
    <section class="noticias">

        <?php

            include "conn.php";
            include "select.php";

        ?>

    </section>
    
</body>
</html>