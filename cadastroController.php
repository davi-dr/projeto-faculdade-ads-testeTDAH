<?php 
require_once "./usuario.php";

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

    } else {
        
    }
    
} else {
    echo "Não recebeu o valor ";

}

?>