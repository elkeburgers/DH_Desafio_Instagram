<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="./css/style.css" rel=stylesheet>
    <title>Cadastre-se - Fakegram</title>
</head>

<body class="bg-light">
    <main>

        <!-- pagina de cadastro de usuario novo -->
        <section class="d-flex justify-content-center align-items-center p-5">
            <form action="/DH_Desafio_Instagram/cadastro-usuario" method="POST" class="card p-5 col-4"
                enctype="multipart/form-data">

                <div>
                    <img class="logo" width="90" src="views/img/logo.png" alt="Logo Instagram">
                    <br><br>
                    <p class="font-weight-bold text-black-50 text-center ">Cadastre-se para ver fotos e vídeos dos seus amigos.</p>
                    <!-- <p class="font-weight-bold text-black-50 text-center">videos dos seus amigos.</p> -->
                </div><br>

                <div class="form-group">
                    <input type="text" name="login" id="login" class="form-control" required
                        placeholder="Nome de usuário">
                </div>
                <div class="form-group">
                    <input type="password" name="senha" id="senha" class="form-control" required placeholder="Senha">
                </div>
                <div class="form-group">
                    <input type="password" name="nome" id="nome" class="form-control" required
                        placeholder="Nome completo">
                </div>
                <div class="form-group">
                    <input type="email" name="email" id="email" class="form-control" required
                        placeholder="E-mail válido">
                </div>

                <!-- botao de cadastro -->
                <div class="form-group text-center">
                    <button class="btn btn-primary btn-block" type="submit">Cadastre-se</button>
                </div>

                <!-- termos e politicas -->
                <div>
                    <p class="font-weight-bold text-black-50 text-center">Ao se cadastrar, você concorda com nossos Termos,Política de Dados e Política de Cookies.</p>
                    <!-- <p class="font-weight-bold text-black-50 text-center">Ao se cadastrar, você concorda com </p>
                    <p class="font-weight-bold text-black-50 text-center">nossos Termos, Politica de Dados e</p>
                    <p class="font-weight-bold text-black-50 text-center">Politica de Cookies.</p> -->
                </div>

            </form>

        </section>

        <!-- link para view login -->
        <section class="d-flex justify-content-center align-items-center">
            <div class="card col-4 p-4 text-center mb-5">
                <p>Tem uma conta?<a href="login"> Conecte-se</a></p>
            </div>
        </section>

    </main>

</body>

</html>