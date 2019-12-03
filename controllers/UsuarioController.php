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

            case 'problema-login':
                $this->problema();
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

    // metodo para ver a pagina em caso de problemas no login
    private function problema(){
        include "views/problemaLogin.php";
    }

    // metodo para sair do login
    private function sair(){
        session_start();
        session_destroy ();
        header('Location:/DH_Desafio_instagram/login');
    }

    // metodo para botao de cadastrar novo usuario
    private function cadastroUsuario(){
        $nome = $_POST['nome'];
        $senha = $_POST['senha'];
        //$senha = password_hash($_POST['senha'], PASSWORD_DEFAULT);
        $email = $_POST['email'];

        $usuario = new Usuarios();
        $resultado = $usuario->criarUsuario( $nome, $senha, $email);

        if($resultado){
            header('Location:/DH_Desafio_instagram/login');
        }else{
            echo  "Usuário já cadastrado.";
        }
    }

    // metodo para executar o login
    private function execLogin(){
            $nome = $_POST["nome"];
            $senha = $_POST['senha'];
            // chamando validacao de login
            if($this->autenticacao($nome, $senha)){
                // inicio sessao
                    session_start();
                    // dados  usuario
                    $usuario = new Usuarios();
                    $acao = $usuario->buscarUsuario($nome);
                    // var_dump($acao);
                    // exit;
                    // sessao com dados do usuario
                    $_SESSION["usuario"] = $acao;
                    header('Location:/DH_Desafio_instagram/publicacoes');
            }else{
                header('Location:/DH_Desafio_instagram/problema-login');
            }
    }
        
    
    // metodo para validacao de login
    private function autenticacao($nome, $senha){
        $autenticacao = false;
        $db = new Usuarios();
        $usuarioObjeto = $db->buscarUsuario($nome);
       
        $senhaBD = $usuarioObjeto->senha;
        

        if($senha == $senhaBD){
            $autenticacao=true;
            return $autenticacao;
        }else{
            return false;
        }
    }

}