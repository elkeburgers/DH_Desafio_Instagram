<?php

include_once "models/Publicacoes.php";

class PublicacaoController{

    // funcoes para direcionar as rotas para os metodos
    public function acao($rotas){
        switch($rotas){
            case 'publicacoes':
                $this->verPubli();
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
    private function verPubli(){
        $publicacao = new Publicacoes();
        $verPubli = $publicacao->verPublicacao();
        $_REQUEST['posts'] = $verPubli;
        include "views/publicacao.php";
    }

    private function formPubli(){
        include "views/novapubl.php";
    }

    // metodo para o botao de cadastro de publicacao
    private function cadastroPublicacao(){
        $descricao = $_POST['descricao'];
        $nomeArquivo = $_FILES['imagem']['name'];
        $linkTemp = $_FILES['imagem']['tmp_name'];
        $caminhoSalvar = "views/img/$nomeArquivo";

        move_uploaded_file($linkTemp, $caminhoSalvar);

        $publicacao = new Publicacoes();
        $id_usuario = 1;
        $resultado = $publicacao->criarPublicacao($caminhoSalvar, $descricao, $id_usuario);

        if($resultado){
            header('Location:/DH_Desafio_instagram/publicacoes');
        }else{
            echo  "Erro na carga";
        }
    }



}



?>