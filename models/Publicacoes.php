<?php

include_once "Conexao.php";

class Publicacoes extends Conexao {

    // metodo para criar publicacao nova
    public function criarPublicacao($imagem, $descricao, $id_usuario){
    $db = parent::criarConexao();
    $query = $db->prepare("INSERT INTO  publicacoes (imagem, descricao, id_usuario) values(?,?,?)");
    return $query->execute([$imagem, $descricao, $id_usuario]);
    }

    // metodo para visualizar publicacoes
    public function verPublicacao(){
    $db = parent::criarConexao();
    $query = $db->query('SELECT * FROM publicacoes INNER JOIN usuarios ON publicacoes.id_usuario=usuarios.id ORDER BY publicacoes.id DESC');
    $resultado = $query->fetchAll(PDO::FETCH_OBJ);
    return $resultado;
    }

}

?>