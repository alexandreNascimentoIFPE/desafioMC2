<?php  
	include_once 'funcoes/funcoes.php';
	$funcoes = new Funcoes();


?>

<div class="container" id="divContainer">
<table class="table"></br>
	<tr>
		<th scope="col">Nome do Aluno</th>
		<th scope="col">Media</th>

	</tr>	
		<?php 
			$media = array();
			$detalharDisciplina = $funcoes -> detalharDisciplina($_REQUEST["id_disciplina"]);
			for ($i=0; $i < count($detalharDisciplina); $i++) 
			{
				$media[$i] = ($detalharDisciplina[$i]["primeira_nota"] + $detalharDisciplina[$i]["segunda_nota"]) / 2;
		?>
		<tr>
			<td scope="row"><?php echo $detalharDisciplina[$i]["nome"]; ?></td>
			<td scope="row"><?php echo $media[$i]; ?></td>
		</tr>
		<?php  
			}
		?>	
				
</table>
</div>