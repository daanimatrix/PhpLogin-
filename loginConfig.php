<?php
session_start();
include('conexao.php');

if(empty($_POST['email']) || empty($_POST['senha'])){
    header('Location: login.php');
    exit();
}

$email = mysqli_real_escape_string($conexao, $_POST['email']);
$senha = mysqli_real_escape_string($conexao, $_POST['senha']);

$query = "SELECT nome,sobrenome,email,niveldeacesso FROM db_sistema_dashboard.usuario where email = '{$email}' and senha ='{$senha}'";

// echo $query;
$result = mysqli_query($conexao, $query);

$row = mysqli_num_rows($result);

if($row == 1){
    $_SESSION['usuario'] = $email;
    header('Location: paginaPrincipal.php');
    exit();
}else{
    $_SESSION['nao_atenticado'] = true;
    header('Location: login.php');
    exit();
}

echo $row;exit;
?>