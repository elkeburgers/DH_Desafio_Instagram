<?php

include_once "Conexao.php";

class Usuarios extends Conexao {

    // funcao para cadastrar novo usuario
    public function criarUsuario($nome, $senha, $email){
    $db = parent::criarConexao();
    $query = $db->prepare("INSERT INTO usuarios (nome, senha, email) values( :nome, :senha, :email)");
    return $query->execute([
        "nome" => $nome, 
        "senha" => $senha, 
        "email" => $email]);
    }

    // funcao para buscar nome do usuario no banco de dados fakegram
    public function buscarUsuario($nome){
    $db = parent::criarConexao();
    $query = $db->prepare("SELECT * FROM usuarios WHERE nome = ?");
    $query->execute([$nome]);
    // var_dump ($query);
    // exit;

    $usuarioObjeto = $query->fetchAll(PDO::FETCH_OBJ);
    // var_dump($usuarioObjeto);
    // exit;
    return $usuarioObjeto[0];
    }

}


?>