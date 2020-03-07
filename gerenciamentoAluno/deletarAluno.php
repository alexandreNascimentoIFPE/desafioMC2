<?php  

include_once 'funcoes/funcoes.php';
$funcoes = new Funcoes();

$funcoes -> deletarAluno($_REQUEST["id_aluno"]);
header("Location: index.php");
?>