<?php  
	include_once 'funcoes/funcoes.php';
	$funcoes = new Funcoes();
	
	var_dump($_REQUEST);

	$funcoes -> adicionarNota($_REQUEST["primeiraNota"], $_REQUEST["segundaNota"], $_REQUEST["id_matricula"]);

	header('Location: index.php');

	
?>