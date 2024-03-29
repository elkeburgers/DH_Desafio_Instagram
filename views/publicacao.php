<?php   

    $posts = $_REQUEST['posts'];

?>



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

    <!-- pagina de visualizacao de publicacoes -->
    <main class="board">
   
    <?php foreach($posts as $post): ?>
        <div class="card mt-5">
            <img id="cardimg" src="<?php echo $post->imagem; ?>" alt="Foto">
            <div class="card-body">
                 <p class="font-weight-bold">
                 <?php echo $post->nome; ?>
                </p>
                <p class="card-text">
                   <?php echo $post->descricao; ?>
                </p>
            </div>
        </div>
    <?php endforeach; ?>
      
        <!-- botao flutuante para cadstrar novas publicacacoes -->
        <a class="float-button" href="/DH_Desafio_Instagram/formulario-publicacao">&#10010;</a>
    </main>
    
<!-- links de javascript -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>