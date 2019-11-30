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

}