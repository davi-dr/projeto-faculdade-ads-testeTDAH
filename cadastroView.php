<?php 
require_once "./usuario.php";

$nome = '';
$email = '';

if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['senha'])) {
    $nome = $_POST['name'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    echo $_POST['validated'];

    $validated = "0";
    if(isset($_POST['validated'])){
        
        $validated = $_POST['validated'];

    }

    if( $validated == "1"){
        cadastrarUsuario($nome, $email, $senha);
    header("Location: loginView.php");
    } 
    
} 

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styleCadastro.css">
    <title>TDAH</title>
</head>

<body>
 <!-- reaproveitamento do header com menu nav -->
<?php 
    require_once "./headerView.php";
    ?> 

    <main>
        <section>

            <h2>Cadastre-se</h2>

            <form method="post" onsubmit="verificarSenha()">
                <label>Nome</label>
                <input type="text" name="name" placeholder="Digite seu nome" autocomplete="off" value="<?=$nome ?>" required>

                <label>Email</label>
                <input type="email" name="email" placeholder="Digite seu email" autocomplete="off" value="<?=$email ?>" required>

                <label>Senha</label>
               <input type="password" name="senha" id="senha" placeholder="Crie sua senha">

               <label>Confirmar Senha</label>
               <input type="password" name="confirma_senha" id="confirma_senha" placeholder="Confirma a senha criada">

                <input type="text" hidden id="validated" name="validated" value="0" />


                <button type="submit">Cadastrar</button>
                
            </form>

        </section>
    </main>
    <script src="script.js"></script>
    <script src="scripts/usuario.js"></script>

</body>


</html>