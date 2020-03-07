<div class="container">
  <h2>Cadastro de aluno</h2>
  <form action="cadastrarAlunos.php" method="POST">
    <div class="form-group">
      <label for="nome">Nome:</label>
      <input type="text" class="form-control" id="nome" placeholder="Nome" name="nome">
    </div>
    <div class="form-group">
      <label for="data_nascimento">Data de Nascimento</label>
      <input type="date" class="form-control" id="data" placeholder="data de nascimento" name="data_nascimento">
    </div>
    <button type="submit" class="btn btn-primary">cadastrar</button>
  </form>