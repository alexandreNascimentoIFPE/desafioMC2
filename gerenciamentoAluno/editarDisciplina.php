<?php  

include_once 'funcoes/funcoes.php';
$funcoes = new Funcoes();

$funcoes -> editarDisciplina($_REQUEST["id_disciplina"], $_POST["nome"]);
header("Location: index.php");
?>