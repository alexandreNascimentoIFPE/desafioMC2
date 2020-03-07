<?php  

include_once 'funcoes/funcoes.php';
$funcoes = new Funcoes();

$funcoes -> realizarMatricula($_REQUEST["id_aluno"], $_POST["periodo"], $_POST["disciplina"]);
header("Location: index.php");
?>