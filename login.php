<?php

include('conexao.php');

$login = isset($_POST['login']) ? $_POST['login'] : '';
$senha = isset($_POST['senha']) ? $_POST['senha'] : '';

$select = "SELECT login, senha, nivel FROM login 
			WHERE login = '$login' AND senha = '$senha'";
$query = mysqli_query($conexao, $select);
$dados = mysqli_fetch_row($query);

if (isset($dado[0]) == $login && isset($dado[3]) == $senha) {
	session_start();
	$_SESSION['login'] = $dado[0];
	$_SESSION['nivel'] = $dado[2];
	$_SESSION['logado'] = true;
	header('Location: principal.php');
} else {
	echo '<script>alert("Usuário ou senha incorretos");
			window.location="index.php";
			</script>';
}

?>