<?php
session_start();
// unset($_SESSION['nomedasessao']);//da para escolher o nome da sessão 
session_destroy();
header('Location: login.php');
exit();


?>

