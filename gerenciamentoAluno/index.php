<nav class="navbar navbar-expand-sm bg-light">
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" href="#" id="listarAlunos" onclick="carregar('listarAlunos.php');">Listar Alunos</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#" id="cadastrarAlunos" onclick="carregar('formularioCadastroAluno.php');">Cadastrar Alunos</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#" id="listarDisciplina" onclick="carregar('listarDisciplinas.php');">Listar Disciplinas</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#" id="listarMatricula" onclick="carregar('listarMatriculas.php');">Listar Matriculas</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#" id="adicionarDisciplina" onclick="carregar('formularioAdicionarDisciplina.php');">Adicionar Disciplina</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#" id="detalharDisciplina" onclick="carregar('listarNotas.php');">Listar Notas</a>
    </li>
  </ul>
</nav>

<div id="divExibir"></div>



<script type="text/javascript">
    function carregar(pagina){
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
