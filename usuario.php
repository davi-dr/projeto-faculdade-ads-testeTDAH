
<?php 
require_once "./funcoes.php";
require_once "./conexao.php";

    function cadastrarUsuario($nome, $email, $senha ){
        $registrado = false;

        if(is_empty($nome) ||is_empty($email) ){
            return $registrado;
        }

        if(is_empty($senha)){
            return $registrado;
        }
    
        $conn = conexao();
        $sql = "INSERT INTO usuario (nome, email, senha)
        VALUES ('$nome', '$email', '$senha')";
    
        if (!mysqli_query($conn, $sql)) {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        } else {
            $registrado = true;
        }
    
    
        mysqli_close($conn);
        return $registrado;
    }

    function senhaValidada ($senha, $confirmarSenha){
        if ($senha == $confirmarSenha) {
            return true;
        }
        return false;
    }

    function logar($email, $senha){

    
        if(is_empty($email) || is_empty($senha)){
            echo "deu ruim!";
            return;

        }

        $conn = conexao();
        $sql = "SELECT u.id, u.nome, u.email AS perfil FROM usuario AS u WHERE u.email = '$email' AND u.senha = '$senha'";
        echo $sql;
        $result = mysqli_query($conn, $sql);
        mysqli_close($conn);
        return $result;
    
    }

    function atualizarDados($id, $email, $nome, $senha) {
        if(is_empty($email) || is_empty($nome) || is_empty($senha)){
            return;
        }

        $conn = conexao();
        $sql = "UPDATE usuario SET nome='$nome', email='$email', senha='$senha' WHERE id=$id";
        $result = mysqli_query($conn, $sql);
        mysqli_close($conn);
        $_SESSION["nome"] = $nome;
        header("Location: perfil.php");
        return $result;
    }

    function calcularPontuacao($resposta_pergunta1, $resposta_pergunta2, $resposta_pergunta3, $resposta_pergunta4, $resposta_pergunta5, $resposta_pergunta6) {
        // algoritmo para calcular a pontuação do teste ASRS-18
        $pontuacao = 0;
        if ($resposta_pergunta1 == "as vezes" || $resposta_pergunta1 == "frequentemente" || $resposta_pergunta1 == "muito frequentemente") {
            $pontuacao += 1;
        }
        if ($resposta_pergunta2 == "as vezes" || $resposta_pergunta2 == "frequentemente" || $resposta_pergunta2 == "muito frequentemente") {
            $pontuacao += 1;
        }
        if ($resposta_pergunta3 == "as vezes" || $resposta_pergunta3 == "frequentemente" || $resposta_pergunta3 == "muito frequentemente") {
            $pontuacao += 1;
        }
        if ($resposta_pergunta4 == "frequentemente" || $resposta_pergunta4 == "muito frequentemente") {
            $pontuacao += 1;
        }
        if ($resposta_pergunta5 == "frequentemente" || $resposta_pergunta5 == "muito frequentemente") {
            $pontuacao += 1;
        }
        if ($resposta_pergunta6 == "frequentemente" || $resposta_pergunta6 == "muito frequentemente") {
            $pontuacao += 1;
        }
         if ($pontuacao >= 4) {
            echo "<script>alert('Você tem o indício do transtorno - procure um médico especializado para diagnóstico de fato.');</script>";
        } else {
            echo "<script>alert('Você não tem indício do transtorno, mas em caso de dúvida, procure um especialista.');</script>";
        }

        
               
    }

?>
