<?php  
	include_once 'funcoes/funcoes.php';
	$funcoes = new Funcoes();


?>

<div class="container" id="divContainer">
<table class="table"></br>
	<tr>
		<th scope="col">#</th>
		<th scope="col">Nome da disciplina</th>
		<th scope="col">Alterar Disciplina</th>
		<th scope="col">Remover Disciplina</th>
		<th scope="col">Detalhar Disciplina</th>

	</tr>	
		<?php 
			$listarDisciplina = $funcoes -> listarDisciplina();
			for ($i=0; $i < count($listarDisciplina); $i++) 
			{ 
		?>
		<tr>
			<td scope="col"><?php echo $i+1; ?></td>
			<td scope="row"><?php echo $listarDisciplina[$i]["nome"]; ?></td>
			<td scope="row"><a href="#" onclick="carregar('formularioEditarDisciplina.php?id_disciplina=<?php echo $listarDisciplina[$i]["id_disciplina"]; ?>&nome=<?php echo $listarDisciplina[$i]["nome"]; ?>');"> <img src="icones/editar.png"></a>
			<td scope="row"><a href="#" onclick="carregar('deletarDisciplina.php?id_disciplina=<?php echo $listarDisciplina[$i]["id_disciplina"]; ?>');"> <img src="icones/excluir.png"></a>
			<td scope="row"><a href="#" onclick="carregar('detalharDisciplina.php?id_disciplina=<?php echo $listarDisciplina[$i]["id_disciplina"]; ?>');"> <img src="icones/detalhes.png"></a>
		</tr>
		<?php  
			}
		?>	
				
</table>
</div>
<div id="divExibir"></div>



<script type="text/javascript">
    function carregar(pagina){
    	$("#divContainer").hide();
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