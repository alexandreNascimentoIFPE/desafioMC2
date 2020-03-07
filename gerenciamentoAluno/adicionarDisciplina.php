<?php  
	include_once 'funcoes/funcoes.php';
	$funcoes = new Funcoes();

	$funcoes -> cadastrarDisciplina($_POST["nome_disciplina"]);
	
	header('Location: index.php');
?>