<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Alterar Notícia</title>
</head>
<body>
<div class="container2">
    <form class="row g-3" action="update.php" method="POST">
    <div class="col-md-6">
        <input class="form-control" type="number" min="1" name="consultaupdate" placeholder="ID...">
    </div>
    <div class="col-md-6">
        <input class="form-control" type="text" name="tituloupdate" placeholder="Título...">
    </div>
    <div class="col-md-6">
        <input class="form-control" type="text" name="slugupdate" placeholder="Slug...">
    </div>
    <div class="col-md-6">
        <textarea class="form-control" type="text" name="descricaoupdate" placeholder="Descrição..."></textarea>
    </div>
    <div class="col-md-6">
        <input class="form-control" type="text" name="palavraschaveupdate" placeholder="Palavras-chave">
    </div>
    <div class="col-md-6">    
        <textarea class="form-control" type="text" name="conteudoupdate" placeholder="Conteúdo..."></textarea>
    </div>
    <div class="col-md-6">    
        <input class="botao" type="submit" value="Alterar">
    </div>
    </form>
    </div>
</body>
</html>