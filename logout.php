<?php
session_start();
// Destruir todas as variáveis de sessão
session_destroy();
// Redirecionar o usuário de volta para a página de login ou outra página
header("Location: loginView.php");
exit;
?>
