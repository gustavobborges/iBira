<?php
// Sessão
session_start();
// Conexão
require_once '../../../db_connect.php';

if(isset($_POST['btn-editar-servidor-todos'])):
	$nome = mysqli_escape_string($connect, $_POST['nome']);	
	$acesso = mysqli_escape_string($connect, $_POST['acesso']);	
	$id = mysqli_escape_string($connect, $_POST['id']);
	$idusuario = mysqli_escape_string($connect, $_POST['idusuario']);
	
	$idservico = mysqli_escape_string($connect, $_POST['idservico']);
	$idservicocliente = mysqli_escape_string($connect, $_POST['idservicocliente']);


	if((empty($nome)) || (empty($acesso)) || (empty($idservico)) || (empty($acesso)) || (empty($servicocliente))  )  {
		header('Location: ../../../../view/servidor/newtodos?user='.$idusuario.'&fservidort');
	} else {

	$sql = "UPDATE SERVIDOR SET NOME = '$nome', ACESSO = '$acesso', IDCLIENTE = '$idcliente', IDSERVICOCLIENTE = '$idservicocliente', IDSERVICO = '$idservico' WHERE IDSERVIDOR = '$id'";
	
	if(mysqli_query($connect, $sql)):
		header('Location: ../../../../view/servidor/servidortodos.php?user='.$idusuario.'&ok');
	else:
		header('Location: ../../../../view/servidor/servidortodos.php?user='.$idusuario.'&error');
	endif;
	}
endif;