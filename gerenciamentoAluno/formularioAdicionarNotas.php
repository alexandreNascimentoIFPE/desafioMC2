<?php  
  include_once 'funcoes/funcoes.php';
  $funcoes = new Funcoes();
?>
<div id="divExibir"></div>




<div class="container">
  <h2>Adicionar Nota do Aluno : <?php echo $funcoes -> mostarNomeDoAluno($_REQUEST["id_aluno"]); ?></h2>
  <form action="adicionarNotas.php?id_aluno=<?php echo $_REQUEST["id_aluno"];?>&id_matricula=<?php echo $_REQUEST["id_matricula"]; ?>" method="POST">
    <div class="form-group">
      <label for="nome">Primeira Nota</label>
      <input type="text" class="form-control" id="primeiraNota" placeholder="primeira nota" name="primeiraNota">
    </div>
   <div class="form-group">
      <label for="nome">Segunda Nota</label>
      <input type="text" class="form-control" id="segundaNota" placeholder="segunda nota" name="segundaNota">
    </div>
    <button type="submit" class="btn btn-primary">cadastrar</button>
    <a href="index.php" class="btn btn-primary">voltar</a>
  </form>


<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap-grid.css">
<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap-grid.min.css">
<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap-reboot.css">
<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap-reboot.min.css">
<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="bootstrap.js">
<script type="text/javascript" src="js/jquery.js"></script>