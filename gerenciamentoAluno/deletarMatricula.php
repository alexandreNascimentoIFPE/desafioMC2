<?php  

include_once 'funcoes/funcoes.php';
$funcoes = new Funcoes();

$funcoes -> deletarMatricula($_REQUEST["id_matricula"]);
header("Location: index.php");
?>