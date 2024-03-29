<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Fakegram</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="views/css/styles.css">
</head>

<body>

    <!-- header -->
    <?php include "views/includes/header.php"; ?>
    
    <!-- pagina de cadastro de publicacao -->
    <main class="board">
        <h1> Cadastro de novo Post </h1>
        <form action="/DH_Desafio_Instagram/cadastro-publicacao" method="POST" enctype="multipart/form-data"> 
            <div class="form-group mt-5">
                <label for="imgPubl" class="font-weight-bold">Selecione um arquivo de imagem:</label>
                <input type="file" class="form-control-file" name="imagem" id="imgPubl">
            </div>
            <div class="form-group">
                <label for="descricao" class="font-weight-bold">Descrição:</label>
                <input type="text" class="form-control" id="descricao" name="descricao" placeholder="Insira uma descrição">
            </div>
            <button type="submit" class="btn btn-primary">Postar</button>
        </form>

    </main>

<!-- links de javascript -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>