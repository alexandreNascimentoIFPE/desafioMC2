<?php  

include_once 'funcoes/funcoes.php';
$funcoes = new Funcoes();

$funcoes -> editarAluno($_REQUEST["id_aluno"], $_POST["nome"]);
header("Location: index.php");
?>