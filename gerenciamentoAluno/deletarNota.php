<?php  

include_once 'funcoes/funcoes.php';
$funcoes = new Funcoes();

$funcoes -> deletarNota($_REQUEST["id_nota"]);
header("Location: index.php");

?>