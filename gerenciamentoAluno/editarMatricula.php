<?php  

include_once 'funcoes/funcoes.php';
$funcoes = new Funcoes();
var_dump($_REQUEST);

$funcoes -> editarMatricula($_REQUEST["periodo"], $_REQUEST["disciplina"], $_REQUEST["id_matricula"]);

?>