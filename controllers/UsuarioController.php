<?php

include_once "models/Usuarios.php";

class UsuarioController{

    // funcoes para direcionar as rotas para os metodos
    public function acao($rotas){
        switch($rotas){
            case 'login':
                $this->formLogin();
            break;

            case 'executar-login':
                $this->execLogin();
            break;

            case 'formulario-usuario':
                $this->formUsuario();
            break;

            case 'cadastro-usuario':
                $this->cadastroUsuario();
            break;

            case 'sair':
                $this->sair();
            break;
        }
    }

    // metodos para acoes no banco de dados

    // metodo para ver a pagina de login na view login
    private function formLogin(){
        include "views/login.php";
    }

    // metodo para ver a pagina de cadastro de usuario na view usuario
    private function formUsuario(){
        include "views/usuario.php";
    }

    // metodo para sair do login
    private function sair(){
        session_start();
        session_destroy ();
        header('Location:/DH_Desafio_instagram/login');
    }

    // metodo para botao de cadastrar novo usuario
    private function cadastroUsuario(){
        $login = $_POST['login'];
        $senha = $_POST['senha'];
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        // $nomeImagem = $_FILES['img_perfil']['name'];
        // $linkTemp = $_FILES['img_perfil']['tmp_name'];
        // $caminhoSalvo = "views/img/$nomeImagem";

        // move_uploaded_file($linkTemp, $caminhoSalvo);

        $usuario = new Usuarios();
        $resultado = $usuario->criarUsuario($login, $senha, $nome, $email);

        if($resultado){
            header('Location:/DH_Desafio_instagram/publicacoes');
        }else{
            echo  "Erro no cadastro";
        }
    }

}