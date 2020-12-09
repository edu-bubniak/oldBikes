<?php

session_start();
unset($_SESSION['id'], $_SESSION['nome'], $_SESSION['email']);

$_SESSION['msg'] = "<p class='php-session-deslog'>Deslogado com sucesso</p>";
header("Location: login.php");
?>