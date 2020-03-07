<?php  
  include_once 'funcoes/funcoes.php';
  $funcoes = new Funcoes();
?>
<div id="divExibir"></div>

<div class="container">
  <h2>Realizar Matricula</h2>
  <form action="editarMatricula.php?id_aluno=<?php echo $_REQUEST["id_matricula"]; ?>" method="POST">
    <div class="form-group">
      <label for="nome">Periodo</label>
      <input type="text" class="form-control" id="periodo" placeholder="Periodo" name="periodo">
    </div>
   <div class="form-group">
      <label for="nome">Disciplina</label>
      <select class="form-control" id="disciplina" placeholder="disciplina" name="disciplina">
          <?php  
            $listarDisciplina = $funcoes -> listarDisciplina();
            for ($i=0; $i < count($listarDisciplina); $i++) 
            { 
          ?> 
              <option value="<?php echo $listarDisciplina[$i]["id_disciplina"]; ?>"><?php echo $listarDisciplina[$i]["nome"]; ?></option>
            <?php 
            } 
            ?>
      </select>

    </div>
    <button type="submit" class="btn btn-primary">cadastrar</button>
    <a href="index.php" class="btn btn-primary">voltar</a>
  </form>


<script type="text/javascript">
    function carregar(pagina){

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