<?php 
session_start();
include("conexao.php");


$deletar =  mysqli_real_escape_string($conexao, trim($_POST['deletar']));

$sql = "select count(*) as total from usuario where usuario_id = '$deletar'";
$result = mysqli_query($conexao, $sql);
$row = mysqli_fetch_assoc($result);






if ($deletar != 'selecione') {

$sql = "delete from usuario where usuario_id = '$deletar'";
echo $sql;

}else{
	echo "Escolha um usario valido";
	header('Location: listar.php');
}





if($conexao->query($sql) === TRUE) {
	$_SESSION['status_exclusao'] = true;	
}else{
	$_SESSION['selecionar_user'] = true;
}

$conexao->close();

header('Location: listar.php');
exit;



?>