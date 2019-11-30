<?php 
// a senha foi criada no phpteste.net usando password_hash e var_dump para copiar a codificação abaixo. Senha original 123, e precisa sempre estar com aspas simples porque o PHP pode entender as aspas duplas como parte da codificação dele.
// $usuario = ["login"=>"elke.burgers@hotmail.com", "senha"=>'$2y$10$P.oFdVvoZvS5LRx/8CQibuYYDh3hbYvJpKhWvDg.b0071NoyJ/666'];

if($_POST){
    $login = $_POST["login"];
    $senha = $_POST["senha"];
    // validando login
    if($login == $usuario["login"]){
        // validando a senha
        if(password_verify($senha, $usuario["senha"])){
            
            // para iniciar a sessão de login e colocar o nome dele (depois trocamos o nome para puxar direto do banco de dados)
            session_start();
            $_SESSION["usuario"] = ["nome"=>"Elke"];

            header("Location: publicacao.php");
        }else{
            echo "E-mail ou senha inválidos.";
        }
    }else{
        echo "E-mail ou senha inválidos.";
    }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="./css/style.css" rel=stylesheet>
    <title>Entrar - Fakegram</title>
</head>

<body class="bg-light">
    <main>

    <!-- pagina inicial de login -->
    <section class="d-flex justify-content-center align-items-center p-5">
        <form action="/DH_Desafio_Instagram/executar-login" method="POST" class="card p-5" enctype="multipart/form-data"> 

            <div>
            <img class="logo" width="90" src="views/img/logo.png" alt="Logo Instagram">
            </div><br><br>

            <div class="form-group">
                <input type="text" name="login" id="login" class="form-control" required placeholder="Coloque seu login">
            </div>
            <div class="form-group">
                <input type="password" name="senha" id="senha" class="form-control" required placeholder="Senha">
            </div>

            <div class="form-group text-center">
                <button class="btn btn-primary btn-block" type="submit">Entrar</button>
            </div>

        </form>
        </section>

        <!-- link para view usuario - cadastro de usuario novo -->
        <section class="d-flex justify-content-center align-items-center">
            <div class="form-group text-center">
                <p>Não tem uma conta?<a href="formulario-usuario">  Cadastre-se</a></p>
            </div>
        </section>

    </main>

</body>

</html>