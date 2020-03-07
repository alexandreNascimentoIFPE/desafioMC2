<?php  

include_once 'funcoes/funcoes.php';
$funcoes = new Funcoes();

$funcoes -> deletarDisciplina($_REQUEST["id_disciplina"]);
header("Location: index.php");
?>