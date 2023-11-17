<?php

session_start();

include('conexao.php');
include('validaradmin.php');

$cpf = isset($_POST['cpf']) ? $_POST['cpf'] : '';
$nivel = isset($_POST['nivel']) ? $_POST['nivel'] : '';

$update = "UPDATE login SET nivel = '$nivel' WHERE cpf = '$cpf'";
$query = mysqli_query($conexao, $update);

header('Location: chamausuario.php?cod='.$cpf);

?>