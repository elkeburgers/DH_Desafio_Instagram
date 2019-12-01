<?php

include_once "Conexao.php";

class Usuarios extends Conexao {

    // metodo para cadastrar novo usuario
    public function criarUsuario($login, $senha, $nome, $email){
    $db = parent::criarConexao();
    $query = $db->prepare("INSERT INTO usuarios (login, senha, nome, email) values(?,?,?,?)");
    return $query->execute([$login, $senha, $nome, $email]);
    }

}


?>