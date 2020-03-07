<?php  
	include_once 'funcoes/funcoes.php';
	$funcoes = new Funcoes();
?>
<div class="container" id="listaMatricula">
<table class="table"></br>
	<tr>
		<th scope="col">Disciplina</th>
		<th scope="col">Periodo</th>
		<th scope="col">Aluno</th>
		<th scope="col">Adicionar Nota</th>
		<th scope="col">Alterar</th>
		<th scope="col">Excluir</th>

	</tr>	
		<?php 
			$listaMatricula = $funcoes -> listarMatricula();
			for ($i=0; $i < count($listaMatricula); $i++) 
			{ 
		?>
		<tr>
			<td scope="row"><?php echo $listaMatricula[$i]["nome_disciplina"]; ?></td>
			<td scope="row"><?php echo $listaMatricula[$i]["periodo"]; ?></td>
			<td scope="row"><?php echo $listaMatricula[$i]["nome_aluno"]; ?></td>
			
			<?php 
				$verificaAlunoMatriculado = $funcoes -> verificarSeAlunoEstaMatriculado($listaMatricula[$i]["id_aluno"]);
				if ($verificaAlunoMatriculado == 1) 
				{
			?>
				<td scope="row"><a href="#" onclick="carregar('formularioAdicionarNotas.php?id_aluno=<?php echo $listaMatricula[$i]["id_aluno"]; ?>&id_matricula=<?php echo $listaMatricula[$i]["id_matricula"]; ?>');"> <img src="icones/adicionar.png"></a>
				

			<?php  
				}
				else
				{
			?>
				<td scope="row"></td>	
			<?php  
				}	
			?>
			<td scope="row"><a href="#" onclick="carregar('formularioEditarMatricula.php?id_matricula=<?php echo $listaMatricula[$i]["id_matricula"]; ?>&periodo=<?php echo $listaMatricula[$i]["periodo"]; ?>&nome_aluno=<?php echo $listaMatricula[$i]["nome_aluno"];?>');"> <img src="icones/editar.png"></a>
			<td scope="row"><a href="#" onclick="carregar('formularioExcluirMatricula.php?id_matricula=<?php echo $listaMatricula[$i]["id_matricula"]; ?>');"> <img src="icones/excluir.png"></a>
		</tr>
		<?php  
			}
		?>	
				
</table>
</div>

<script type="text/javascript">
    function carregar(pagina){
    	
        $("#listaMatricula").fadeIn();
        $("#listaMatricula").load(pagina);
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