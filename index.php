<?php

// caso nao haja nada na rota, direciona para a pagina de publicacoes
$rotas = key($_GET)?key($_GET):"publicacoes";

// rotas caso haja direcionamento na url
    switch($rotas){

    case 'publicacoes':
        include "controllers/PublicacaoController.php";
        $controller = new PublicacaoController();
        $controller->acao($rotas);
        break;
        
    case 'formulario-publicacao':
        include "controllers/PublicacaoController.php";
        $controller = new PublicacaoController();
        $controller->acao($rotas);
        break;

    case 'cadastro-publicacao':
        include "controllers/PublicacaoController.php";
        $controller = new PublicacaoController();
        $controller->acao($rotas);
        break;

    case 'login':
        include "controllers/UsuarioController.php";
        $controller = new UsuarioController();
        $controller->acao($rotas);
        break;

    case 'executar-login':
        include "controllers/UsuarioController.php";
        $controller = new UsuarioController();
        $controller->acao($rotas);
        break;
    
    case 'formulario-usuario':
        include "controllers/UsuarioController.php";
        $controller = new UsuarioController();
        $controller->acao($rotas);
        break;
    
    case 'cadastro-usuario':
        include "controllers/UsuarioController.php";
        $controller = new UsuarioController();
        $controller->acao($rotas);
        break;
    } 

?>