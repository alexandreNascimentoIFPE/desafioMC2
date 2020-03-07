<?php  
	include_once 'funcoes/funcoes.php';
	$funcoes = new Funcoes();
?>

<div class="container" id="listaAlunos">
<table class="table"></br>
	<tr>
		<th scope="col">Nome do aluno</th>
		<th scope="col">Data de Nascimento</th>
		<th scope="col">Fazer Matricula</th>
		<th scope="col">Detalhamento do Aluno</th>
		<th scope="col">Alterar Aluno</th>
		<th scope="col">Excluir Aluno</th>
	</tr>	
		<?php 
			$listaAlunos = $funcoes -> listarAlunos();
			for ($i=0; $i < count($listaAlunos); $i++) 
			{ 
		?>
		<tr>
			<td scope="row" class=""><?php echo $listaAlunos[$i]["nome"]; ?></td>
			<td scope="row"><?php echo $funcoes -> formatodata($listaAlunos[$i]["data_nascimento"]); ?></td>
			<td scope="row"><a href="#" onclick="carregar('formularioRealizarMatricula.php?id_aluno=<?php echo $listaAlunos[$i]["id_aluno"]; ?>');"> <img src="icones/adicionar.png"></a>
			<?php 
				$verificaAlunoMatriculado = $funcoes -> verificarSeAlunoEstaMatriculado($listaAlunos[$i]["id_aluno"]);
				if ($verificaAlunoMatriculado == 1) 
				{
			?>
				<td scope="row"><a href="#" onclick="carregar('detalharAluno.php?id_aluno=<?php echo $listaAlunos[$i]["id_aluno"]; ?>');"> <img src="icones/detalhes.png"></a>

			<?php  
				}
				else
				{
			?>
				<td scope="row"></td>	
			<?php  
				}	
			?>
			<td scope="row"><a href="#" onclick="carregar('formularioEditarAluno.php?id_aluno=<?php echo $listaAlunos[$i]["id_aluno"]; ?>&nome=<?php  echo $listaAlunos[$i]["nome"]; ?>');"> <img src="icones/editar.png"></a>
			<td scope="row"><a href="#" onclick="carregar('deletarAluno.php?id_aluno=<?php echo $listaAlunos[$i]["id_aluno"]; ?>');"> <img src="icones/excluir.png"></a>
		</tr>
		<?php  
			}
		?>	
				
</table>
</div>

<script type="text/javascript">
    function carregar(pagina){
    	$("#listaAlunos").hide();
        $("#divExibir").fadeIn();
        $("#divExibir").load(pagina);
    }
</script>


<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap-grid.css">
<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap-grid.min.css">
<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap-reboot.css">
<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap-reboot.min.css">
<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="bootstrap.js">
<script type="text/javascript" src="js/jquery.js"></script>
