<?php 
require_once "./usuario.php";

$verify = $_SERVER["REQUEST_METHOD"] == "POST";

// Verifica se o formulário foi enviado
if ($verify) {
    $email = "";
    $senha = "";

    if (isset($_POST['email'])) {
        $email = $_POST['email'];
    }

    if (isset($_POST['senha'])) {
        $senha = $_POST['senha'];
    }    

    $usuarioLogado = logar($email, $senha);
    
    if (mysqli_num_rows($usuarioLogado) > 0) {
        // output data of each row
        while ($row = mysqli_fetch_assoc($usuarioLogado)) {
            session_start();
            // Set session variables
            $_SESSION["id"] = $row["id"];
            $_SESSION["nome"] = $row["nome"];
            $_SESSION["email"] = $row["email"];
            //$_SESSION["perfil"] = $row["perfil"];

            // Definir variável de sessão para indicar login bem-sucedido
            $_SESSION["login_success"] = true;

            // Redirecionar para a página inicial após o login bem-sucedido
            header("Location: index.php");
            exit;
        }
    } else {
        // E-mail ou senha inválidos
        echo "<script>alert('E-mail ou senha inválidos tente novamente!'); window.location.href = 'loginView.php';</script>";
        exit;
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styleLogin.css">
    <title>TDAH</title>
</head>
<body>

    <?php 
    require_once "./headerView.php";
    ?> 

    <main>
        <section class="home">
            <div class="home-text">
                <form class="login" method="POST" autocomplete="off">
                    <h2>Login</h2>
                    <div class="box-user">
                        <label>E-mail</label>
                        <input type="email" placeholder="Digite seu email" name="email" required>
                    </div>
                    <div class="box-user">
                        <label>Senha</label>
                        <input type="password" placeholder="Digite sua senha" name="senha" required autocomplete="new-password">
                    </div>
                    <div>
                        <a href="cadastroView.php" class="forget"> Cadastre-se</a>
                    </div>
                    <button type="submit" class="btn">Entrar</button>
                </form>
            </div>
            
        </section>
    </main>

    <script src="script.js"></script>

</body>
</html>
