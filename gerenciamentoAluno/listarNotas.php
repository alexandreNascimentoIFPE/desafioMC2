<?php  
	include_once 'funcoes/funcoes.php';
	$funcoes = new Funcoes();


?>

<div class="container" id="divContainer">
<table class="table"></br>
	<tr>
		<th scope="col">Nome do Aluno</th>
		<th scope="col">Nome da Disciplina</th>
		<th scope="col">Primeira Nota</th>
		<th scope="col">Segunda Nota</th>
		<th scope="col">Excluir Nota</th>

	</tr>	
		<?php 
			$listarNota = $funcoes -> listarNotas();
			
			for ($i=0; $i < count($listarNota); $i++) 
			{ 
		?>
		<tr>
			<td scope="row"><?php echo $listarNota[$i]["nome"]; ?></td>
			<td scope="row"><?php echo $listarNota[$i]["disciplina"]; ?></td>
			<td scope="row"><?php echo $listarNota[$i]["primeira_nota"]; ?></td>
			<td scope="row"><?php echo $listarNota[$i]["segunda_nota"]; ?></td>
			<td scope="row"><a href="deletarNota.php?id_nota=<?php echo $listarNota[$i]["id_nota"]; ?>"> <img src="icones/excluir.png"></a>

		</tr>
		<?php  
			}
		?>	
				
</table>
</div>