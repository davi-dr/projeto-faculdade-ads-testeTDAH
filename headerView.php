<header>
    <nav class="navigation">
        <a href="./index.php" class="logo">TDAH</a>
        <ul class="nav-menu">
            <!-- <li class="nav-item"><a href="./index.php">Início</a></li> -->

            <li class="nav-item"><a href="./testeView.php">Teste TDAH</a></li>
            <li class="nav-item"><a href="./contatoView.php">Contato</a></li>

            <?php
            // Iniciar a sessão
            session_start();
            // Verificar se o usuário está logado
            if (isset($_SESSION["id"])) {
                // Se o usuário estiver logado, exibir o nome e "Sair"
                echo "<li class='nav-item'><a href='perfil.php' id='nomeusuario' >{$_SESSION["nome"]}</a></li>";
                echo '<li class="nav-item"><a href="logout.php"> << Sair</a></li>';
            } else {
                // Se o usuário não estiver logado, exibir a opção "Login"
                echo '<li class="nav-item"><a href="./loginView.php">Login</a></li>';
            }
            ?>

        </ul>
        <div class="menu">
            <span class="bar"></span>
            <span class="bar"></span>
            <span class="bar"></span>
        </div>
    </nav>



</header>
