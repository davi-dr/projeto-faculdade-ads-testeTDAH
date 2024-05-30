<?php
session_start();
require_once './conexao.php';

// Verifica se o usuário está logado
if (!isset($_SESSION["id"])) {
    header("Location: login.php");
    exit;
}

// Verifica se o ID do usuário foi passado como parâmetro na URL
if (!isset($_GET["id"])) {
    echo "ID do usuário não especificado.";
    exit;
}

// Obtém o ID do usuário da URL
$userId = $_GET["id"];
$conn = conexao();
$sql = "DELETE FROM usuario WHERE id=$userId";
echo $sql;
$result = mysqli_query($conn, $sql);
mysqli_close($conn);
session_destroy();
header("Location: loginView.php");

?>