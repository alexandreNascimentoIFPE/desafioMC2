<?php  
	include_once 'funcoes/funcoes.php';
	$funcoes = new Funcoes();


	$funcoes -> adicionarAluno($_POST["nome"], $funcoes -> formatodataBDV2($_POST["data_nascimento"]));

	header('Location: index.php');
?>