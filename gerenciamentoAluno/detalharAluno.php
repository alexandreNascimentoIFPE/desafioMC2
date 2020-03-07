<?php  
	include_once 'funcoes/funcoes.php';
	$funcoes = new Funcoes();
	$detalharAluno = $funcoes -> detalharAluno($_REQUEST["id_aluno"]);
?>

<div class="container" id="detalharAluno">
<table class="table"></br>
	<tr>
		<th scope="col">Nome do aluno</th>
		<th scope="col">Disciplinas</th>
		<th scope="col">Periodo</th>
		<th scope="col">Primeira Nota</th>
		<th scope="col">Segunda Nota</th>
		<th scope="col">Média</th>
	</tr>	
		<?php 
			$media = array();
			for ($i=0; $i < count($detalharAluno); $i++) 
			{
				

				$media[$i] += $detalharAluno[$i]["segunda_nota"] + $detalharAluno[$i]["primeira_nota"] / 2;

		?>
		<tr>
			<td scope="row" class=""><?php echo $detalharAluno[$i]["nome_aluno"]; ?></td>
			<td scope="row" class=""><?php echo $detalharAluno[$i]["nome_disciplina"]; ?></td>
			<td scope="row" class=""><?php echo $detalharAluno[$i]["periodo"]; ?></td>
			<td scope="row" class=""><?php echo $detalharAluno[$i]["primeira_nota"]; ?></td>
			<td scope="row" class=""><?php echo $detalharAluno[$i]["segunda_nota"]; ?></td>
			<td scope="row" class=""><?php echo $detalharAluno[$i]["primeira_nota"]; ?></td>
			<td scope="row" class=""><?php echo $media[$i]; ?></td>
			
		</tr>
		<tr>
			<th scope="col">Média Geral</th>
			<td scope="row" class=""><?php echo array_sum($media); ?></td>
		</tr>
		<?php  
			}
		?>	
				
</table>
</div>

<script type="text/javascript">
    function carregar(pagina){
    	$("#detalharAluno").hide();
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
