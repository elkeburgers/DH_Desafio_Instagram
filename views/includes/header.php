<header>

    <nav>
        <div class="navbar topo-instagran justify-content-center">
            <a class="navbar-brand" href="#"><img width="90" src="views/img/logo.png" alt="" srcset="">Instagram</a>
        </div>

        <!-- precisa fazer a chamada correta no banco de dados  do usuario, dentro do controller ou do model -->
        <ul class="nav">
            <?php if(isset($usuario) && $usuario != []) {?>
            <li class="nav-item">
                <a class="nav-link" href="#">Olá <?php echo $usuario["nome"]; ?></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="sair">Sair</a>
            </li>
            <?php } ?>
        </ul>
    </nav>

</header>