<?php

include_once "models/Publicacoes.php";
session_start();

class PublicacaoController{

    // funcoes para direcionar as rotas para os metodos
    public function acao($rotas){
        switch($rotas){
            case 'publicacoes':
                $this->verPublicacao();
            break;

            case 'formulario-publicacao':
                $this->formPubli();
            break;

            case 'cadastro-publicacao':
                $this->cadastroPublicacao();
            break;
        }
    }

    // metodos para acoes no banco de dados

    // metodo para ver as publicacoes na view publicacao
    private function verPublicacao(){
        $publicacao = new Publicacoes();
        $vejaPubli = $publicacao->verPublicacao();
        $_REQUEST['posts'] = $vejaPubli;
        include "views/publicacao.php";
    }

    // metodo  para ver o formulario da view novapubl
    private function formPubli(){
        include "views/novapubl.php";
    }

    // metodo para o botao de cadastro de publicacao na view novapubl
    private function cadastroPublicacao(){
        $descricao = $_POST['descricao'];
        $nomeArquivo = $_FILES['imagem']['name'];
        $linkTemp = $_FILES['imagem']['tmp_name'];
        $caminhoSalvar = "views/img/$nomeArquivo";

        move_uploaded_file($linkTemp, $caminhoSalvar);
        // var_dump ($_SESSION["usuario"]);
        // exit;

        $publicacao = new Publicacoes();
        $id_usuario = $_SESSION['usuario']->id;
        // var_dump($_SESSION['usuario']);
        // exit;
        $resultado = $publicacao->criarPublicacao($caminhoSalvar, $descricao, $id_usuario);

        if($resultado){
            header('Location:/DH_Desafio_instagram/publicacoes');
        }else{
            echo  "Erro na carga";
        }
    }



}



?>