<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Criar Notícia</title>
</head>
<body>
    <div class="container1">
    <form class="row g-3" action="insert.php" method="POST">
    <div class="col-md-6">
        <input class="form-control" type="text" name="titulo" placeholder="Título...">
    </div>
    <div class="col-md-6">
        <input class="form-control" type="text" name="slug" placeholder="Slug...">
    </div>
    <div class="col-md-6">
        <textarea class="form-control" type="text" name="descricao" placeholder="Descrição..."></textarea>
    </div>
    <div class="col-md-6">
        <input class="form-control" type="text" name="palavraschave" placeholder="Palavras-chave">
    </div>
    <div class="col-md-6">    
        <textarea class="form-control" type="text" name="conteudo" placeholder="Conteúdo..."></textarea>
    </div>
    <div class="col-md-6">    
        <input class="botao" type="submit" value="Cadastrar">
    </div>
    </form>
    </div>
</body>
</html>