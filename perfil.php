<?php
// Iniciar a sessão
// session_start();

require_once "./conexao.php";
require_once "./usuario.php";
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="styleLogin.css">
    <title>Perfil</title>
</head>

<body>

    <?php
    require_once "./headerView.php";
    ?>

<main>
<?php 
    $id = $_SESSION["id"];
    $verify = $_SERVER["REQUEST_METHOD"] == "POST";

// Verifica se o formulário foi enviado
if ($verify) {
    if (isset($_POST['email'])) {
        $email = $_POST['email'];
    }
    if (isset($_POST['nome'])) {
        $nome = $_POST['nome'];
    }
    if (isset($_POST['senha'])) {
        $senha = $_POST['senha'];
    }    
    $atualizarDados = atualizarDados($id, $email, $nome, $senha);
}
?>

<?php
        $sql = "SELECT * FROM usuario WHERE id=$id";
        $conn = conexao();    
        // Executar a consulta
        $result = mysqli_query($conn, $sql);
    
        // Verificar se a consulta retornou resultados
        if ($result && mysqli_num_rows($result) > 0) {
            // Obter os dados do usuário
            $row = mysqli_fetch_assoc($result);
            
            // Extrair o nome, senha e email do resultado
            $nome = $row["nome"];
            $senha = $row["senha"];
            $email = $row["email"];
        } else {
            // Não foram encontrados resultados para o ID especificado
            echo "Nenhum usuário encontrado com o ID $id";
        }
    
        // Fechar a conexão
        mysqli_close($conn);
?>
        <section class="home">
            <div class="home-text">
                <form class="login" method="POST" autocomplete="off">
                    <h2>Meu Perfil</h2>
                    <div class="box-user">
                        <label>E-mail</label>
                        <input type="email" value="<?php echo $email;?>" name="email" required>
                    </div>
                    <div class="box-user">
                        <label>Nome</label>
                        <input type="nome" value="<?php echo $nome;?>" name="nome" required>
                    </div>
                    <div class="box-user">
                        <label>Senha</label>
                        <input type="password" value="<?php echo $senha;?>"placeholder="Digite sua senha" name="senha" required autocomplete="new-password">
                    </div>
                    <button type="submit" id="salvar" class="btn">Salvar Alteração</button>
                    <a class="btn-excluir" href="excluir_conta.php?id=<?php echo $id?>" onclick="return confirm('Deseja realmente excluir este usuário?');">Deletar Perfil</a>
                </form>
            </div>
            
        </section>
    </main>
    <script>
     
    </script>
    <script src="script.js"></script>

</body>

</html>