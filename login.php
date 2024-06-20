<?php 
session_start();
include('conexao.php');

if(empty($_POST['usuario']) || empty($_POST['senha'])){
	header('Location: index.php');
	exit();
}


$usuario = mysqli_real_escape_string($conexao, $_POST['usuario']);
$senha = mysqli_real_escape_string($conexao, $_POST['senha']);



$query = "select * from usuario where usuario = '{$usuario}' and senha = md5('{$senha}')";


//$result = mysqli_query($conexao, $query);
//$row = mysqli_num_rows($result);

//$nome = '';

//echo $result();
$result = $conexao->query($query);
$row = $result->fetch_object();


if($row == 1) {
	$_SESSION['usuario'] = $row->usuario;
	$_SESSION['nome'] = $row->nome;
	$_SESSION['tp_user'] = $row->tp_user;
	header('Location: home.php');
	
	exit();
} else {
	$_SESSION['nao_autenticado'] = true;
	header('Location: index.php');
	exit();
}



?>