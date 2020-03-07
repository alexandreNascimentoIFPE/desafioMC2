<?php  
  include_once 'funcoes/funcoes.php';
  $funcoes = new Funcoes();
?>
<div id="divExibir"></div>

<div class="container">
  <h2>Alterar Disciplina : </h2>
  <form action="editarDisciplina.php?id_disciplina=<?php echo $_REQUEST["id_disciplina"]; ?>" method="POST">
    <div class="form-group">
      <label for="nome">Nome da Disciplina</label>
      <input type="text" class="form-control" id="nome" placeholder="nome" name="nome">
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