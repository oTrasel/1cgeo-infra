<?php 
session_start();
include("conexao.php");

$nome = mysqli_real_escape_string($conexao, trim($_POST['nome']));
$usuario = mysqli_real_escape_string($conexao, trim($_POST['usuario']));
$senha = mysqli_real_escape_string($conexao, trim(md5($_POST['senha'])));
$user =  mysqli_real_escape_string($conexao, trim($_POST['selectuser']));
$deletar =  mysqli_real_escape_string($conexao, trim($_POST['deletar']));

$sql = "select count(*) as total from usuario where usuario = '$usuario'";
$result = mysqli_query($conexao, $sql);
$row = mysqli_fetch_assoc($result);

if($row['total'] == 1) {
	$_SESSION['usuario_existe'] = true;
	header('Location: cadastro.php');
	exit;
}



if ($nome && $usuario && $senha != '') {

$sql = "INSERT INTO usuario (nome, usuario, senha, data_cadastro, tp_user) VALUES ('$nome', '$usuario', '$senha', NOW(), '$user')";
	
}else{
	echo "Digite um usuario valido";
}



/* $sql = "INSERT INTO usuario (nome, usuario, senha, data_cadastro) VALUES ('$nome', '$usuario', '$senha', NOW())"; */




if($conexao->query($sql) === TRUE) {
	$_SESSION['status_cadastro'] = true;	
}

$conexao->close();

header('Location: cadastro.php');
exit;







