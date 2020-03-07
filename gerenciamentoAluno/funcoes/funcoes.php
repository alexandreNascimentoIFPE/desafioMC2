<?php
include_once 'conexao/conexao.php';
class Funcoes
{
	function formatodata($datafor) {
  		$datafor = substr($datafor,8,2)."/".substr($datafor,5,2)."/".substr($datafor,0,4);
  		return $datafor;
	}

	function formatoDataBDV2($datafor) {
  		return implode('-', array_reverse(explode('/', $datafor)));
	}
	

	public function listarAlunos()
	{
		try
		{
	        $mySQL = new MySQL;
			$mySQL->connMySQL();

			$sql   = 'SELECT *
					  FROM aluno AS a';

			$executar = $mySQL->runQuery($sql);
            
            $arrayListaAlunos = array();
        
            $x = 0;
                            
            while ($informacao = mysqli_fetch_array($executar))
            {
            	$arrayListaAlunos[$x]["id_aluno"]        = $informacao["id_aluno"];
            	$arrayListaAlunos[$x]["nome"]            = $informacao["nome"];
            	$arrayListaAlunos[$x]["data_nascimento"] = $informacao["data_nascimento"];
            	$x++;
            }

            return $arrayListaAlunos;
		}
		catch (Exception $e)
		{
				
			return $e->getMessage();;
		}
	}

	public function mostarNomeDoAluno($id_aluno)
	{
		try
		{
	        $mySQL = new MySQL;
			$mySQL->connMySQL();

			$sql   = 'SELECT nome
					  FROM aluno
					  WHERE id_aluno ='.$id_aluno;

			$executar = $mySQL->runQuery($sql);
            
                            
            $informacao = mysqli_fetch_array($executar);
           
            $arrayListaNomeAluno = $informacao["nome"];
           
            

            return $arrayListaNomeAluno;
		}
		catch (Exception $e)
		{
				
			return $e->getMessage();;
		}
	}
	public function listarDisciplina()
	{
		try
		{
	        $mySQL = new MySQL;
			$mySQL->connMySQL();

			$sql   = 'SELECT * 
					  FROM disciplina';

			$executar = $mySQL->runQuery($sql);
            
            $arrayListaDisciplina = array();
        
            $x = 0;
                            
            while ($informacao = mysqli_fetch_array($executar))
            {
            	$arrayListaDisciplina[$x]["id_disciplina"]        = $informacao["id_disciplina"];
            	$arrayListaDisciplina[$x]["nome"]                 = $informacao["nome"];
         
            	$x++;
            }

            return $arrayListaDisciplina;
		}
		catch (Exception $e)
		{
				
			return $e->getMessage();;
		}
	}

	public function cadastrarDisciplina($nome)
	{
		try
		{
	        $mySQL = new MySQL;
			$mySQL->connMySQL();

			$sql   = 'INSERT INTO disciplina (nome)
					  VALUES ("'.$nome.'")';

			$executar = $mySQL->runQuery($sql);
            
            $arrayListaMatricula = array();
		}
		catch (Exception $e)
		{
				
			return $e->getMessage();;
		}
	}

	public function adicionarAluno($nome, $data_nascimento)
	{
		try
		{
	        $mySQL = new MySQL;
			$mySQL->connMySQL();

			$sql   = 'INSERT INTO aluno (nome, data_nascimento)
					  VALUES ("'.$nome.'", "'.$data_nascimento.'")';

			$executar = $mySQL->runQuery($sql);
            
		}
		catch (Exception $e)
		{
				
			return $e->getMessage();;
		}
	}

	public function verificarSeAlunoEstaMatriculado($id_aluno)
	{
		try
		{
	        $mySQL = new MySQL;
			$mySQL->connMySQL();

			$sql   = 'SELECT COUNT(id_matricula) AS quantidade_matricula
					  FROM matricula
					  WHERE id_aluno ='. $id_aluno;

			$executar = $mySQL->runQuery($sql);
            $informacao = mysqli_fetch_array($executar);
            $resultado = 0;
        	if ($informacao["quantidade_matricula"] != 0) {
        		$resultado += 1;
        	}
        	else
        	{
        		$resultado += 0;
        	}
            

            return $resultado;
		}
		catch (Exception $e)
		{
				
			return $e->getMessage();;
		}
	}

	public function realizarMatricula($id_aluno, $periodo, $id_disciplina)
	{
		try
		{
	        $mySQL = new MySQL;
			$mySQL->connMySQL();

			$sql   = 'INSERT INTO matricula (id_aluno, periodo, id_disciplina)
					  VALUES ("'.$id_aluno.'", "'.$periodo.'", "'.$id_disciplina.'")';

			$executar = $mySQL->runQuery($sql);
            
		}
		catch (Exception $e)
		{
				
			return $e->getMessage();;
		}
	}

	public function listarMatricula()
	{
		try
		{
	        $mySQL = new MySQL;
			$mySQL->connMySQL();

			$sql   = 'SELECT m.id_aluno, 
							 m.id_matricula, 
							 a.nome AS nome_aluno, 
							 d.nome AS nome_disciplina, 
							 m.periodo
					  FROM matricula AS m
					  INNER JOIN aluno AS a
					  ON a.id_aluno = m.id_aluno
					  INNER JOIN disciplina AS d
					  ON d.id_disciplina = m.id_disciplina';

			$executar = $mySQL->runQuery($sql);
            
            $arrayListaMatricula = array();
        
            $x = 0;
                            
            while ($informacao = mysqli_fetch_array($executar))
            {
            	$arrayListaMatricula[$x]["id_aluno"]                     = $informacao["id_aluno"];
            	$arrayListaMatricula[$x]["id_matricula"]                 = $informacao["id_matricula"];
            	$arrayListaMatricula[$x]["nome_aluno"]                   = $informacao["nome_aluno"];
            	$arrayListaMatricula[$x]["nome_disciplina"]              = $informacao["nome_disciplina"];
            	$arrayListaMatricula[$x]["periodo"]                      = $informacao["periodo"];
         
            	$x++;
            }

            return $arrayListaMatricula;
		}
		catch (Exception $e)
		{
				
			return $e->getMessage();;
		}
	}

	public function detalharAluno($id_matricula)
	{
		try
		{
	        $mySQL = new MySQL;
			$mySQL->connMySQL();

			$sql   = 'SELECT m.id_matricula, 
							 a.nome AS nome_aluno, 
							 d.nome AS nome_disciplina, 
							 m.periodo, 
							 n.primeira_nota, 
							 n.segunda_nota,
							 d.id_disciplina
					  FROM matricula AS m
					  INNER JOIN aluno AS a
					  ON a.id_aluno = m.id_aluno
					  INNER JOIN disciplina AS d
					  ON d.id_disciplina = m.id_disciplina
					  INNER JOIN notas AS n
					  ON n.id_matricula = m.id_matricula
					  WHERE n.id_matricula = "'.$id_matricula.'"';

			$executar = $mySQL->runQuery($sql);
            
            $arrayListaMatricula = array();
        
            $x = 0;
                            
            while ($informacao = mysqli_fetch_array($executar))
            {
            	$arrayListaMatricula[$x]["id_matricula"]                 = $informacao["id_matricula"];
            	$arrayListaMatricula[$x]["nome_aluno"]                   = $informacao["nome_aluno"];
            	$arrayListaMatricula[$x]["nome_disciplina"]              = $informacao["nome_disciplina"];
            	$arrayListaMatricula[$x]["periodo"]                      = $informacao["periodo"];
            	$arrayListaMatricula[$x]["primeira_nota"]                = $informacao["primeira_nota"];
            	$arrayListaMatricula[$x]["segunda_nota"]                 = $informacao["segunda_nota"];
            	$arrayListaMatricula[$x]["id_disciplina"]                = $informacao["id_disciplina"];
         
            	$x++;
            }

            return $arrayListaMatricula;
		}
		catch (Exception $e)
		{
				
			return $e->getMessage();;
		}
	}

	public function adicionarNota($primeira_nota, $segunda_nota, $id_matricula)
	{
		try
		{
	        $mySQL = new MySQL;
			$mySQL->connMySQL();

			$sql   = 'INSERT INTO notas (primeira_nota, segunda_nota, id_matricula)
					  VALUES ("'.$primeira_nota.'","'.$segunda_nota.'", "'.$id_matricula.'")';

			$executar = $mySQL->runQuery($sql);
            
		}
		catch (Exception $e)
		{
				
			return $e->getMessage();;
		}
	}

	public function matriculaPorIdAluno($id_aluno)
	{
		try
		{
	        $mySQL = new MySQL;
			$mySQL->connMySQL();

			$sql   = 'SELECT m.id_matricula
					  FROM matricula AS m
					  WHERE m.id_aluno ='.$id_aluno;

			$executar = $mySQL->runQuery($sql);
            
		}
		catch (Exception $e)
		{
				
			return $e->getMessage();;
		}
	}

	public function deletarDisciplina($id_disciplina)
	{
		try
		{
	        $mySQL = new MySQL;
			$mySQL->connMySQL();

			$sql   = 'DELETE FROM disciplina
					  WHERE id_disciplina ="'. $id_disciplina .'"';

			$executar = $mySQL->runQuery($sql);
            
		}
		catch (Exception $e)
		{
				
			return $e->getMessage();;
		}
	}
	public function deletarAluno($id_aluno)
	{
		try
		{
	        $mySQL = new MySQL;
			$mySQL->connMySQL();

			$sql   = 'DELETE FROM aluno
					  WHERE id_aluno ="'. $id_aluno .'"';

			$executar = $mySQL->runQuery($sql);
            
		}
		catch (Exception $e)
		{
				
			return $e->getMessage();;
		}
	}
	public function deletarMatricula($id_matricula)
	{
		try
		{
	        $mySQL = new MySQL;
			$mySQL->connMySQL();

			$sql   = 'DELETE FROM matricula
					  WHERE id_matricula ="'. $id_matricula .'"';

			$executar = $mySQL->runQuery($sql);
            
		}
		catch (Exception $e)
		{
				
			return $e->getMessage();;
		}
	}

	public function editarDisciplina($id_disciplina, $nome)
	{
		try
		{
	        $mySQL = new MySQL;
			$mySQL->connMySQL();

			$sql   = 'UPDATE disciplina
					  SET nome = "'.$nome.'"
					  WHERE id_disciplina = "'.$id_disciplina.'"';

			$executar = $mySQL->runQuery($sql);
            
		}
		catch (Exception $e)
		{
				
			return $e->getMessage();;
		}
	}

	public function editarMatricula($periodo, $disciplina , $id_matricula)
	{
		try
		{
	        $mySQL = new MySQL;
			$mySQL->connMySQL();

			$sql   = 'UPDATE matricula
					  SET periodo = "'.$periodo.'", id_disciplina ="'.$disciplina.'"
					  WHERE id_matricula = "'.$id_matricula.'"';

			$executar = $mySQL->runQuery($sql);
            
		}
		catch (Exception $e)
		{
				
			return $e->getMessage();;
		}
	}

	public function editarAluno($id_aluno, $nome)
	{
		try
		{
	        $mySQL = new MySQL;
			$mySQL->connMySQL();

			$sql   = 'UPDATE aluno
					  SET nome = "'.$nome.'"
					  WHERE id_aluno = "'.$id_aluno.'"';

			$executar = $mySQL->runQuery($sql);
            
		}
		catch (Exception $e)
		{
				
			return $e->getMessage();;
		}
	}

	public function detalharDisciplina($id_disciplina)
	{
		try
		{
	        $mySQL = new MySQL;
			$mySQL->connMySQL();

			$sql   = 'SELECT a.nome, n.primeira_nota, n.segunda_nota 
					  FROM aluno AS a
					  INNER JOIN matricula AS m
					  ON a.id_aluno = m.id_aluno
					  INNER JOIN notas AS n
					  ON m.id_matricula = n.id_matricula
					  INNER JOIN disciplina AS d
					  ON d.id_disciplina = m.id_disciplina
					  WHERE m.id_disciplina = "'.$id_disciplina.'"';

			$executar = $mySQL->runQuery($sql);
            
            $arrayDetalharDisciplina = array();
        
            $x = 0;
                            
            while ($informacao = mysqli_fetch_array($executar))
            {
            	$arrayDetalharDisciplina[$x]["nome"]                 = $informacao["nome"];
            	$arrayDetalharDisciplina[$x]["primeira_nota"]                   = $informacao["primeira_nota"];
            	$arrayDetalharDisciplina[$x]["segunda_nota"]                   = $informacao["segunda_nota"];
            	
         
            	$x++;
            }

            return $arrayDetalharDisciplina;
		}
		catch (Exception $e)
		{
				
			return $e->getMessage();;
		}
	}

	public function listarNotas()
	{
		try
		{
	        $mySQL = new MySQL;
			$mySQL->connMySQL();

			$sql   = 'SELECT n.id_nota, a.nome, n.primeira_nota, n.segunda_nota, d.nome AS disciplina
					  FROM notas AS n
					  INNER JOIN matricula AS m
					  ON m.id_matricula = n.id_matricula
					  INNER JOIN aluno AS a
					  ON a.id_aluno = m.id_aluno
					  INNER JOIN disciplina AS d
					  ON d.id_disciplina = m.id_disciplina
					  ';

			$executar = $mySQL->runQuery($sql);
            
            $arrayNotas = array();
        
            $x = 0;
                            
            while ($informacao = mysqli_fetch_array($executar))
            {
            	$arrayNotas[$x]["id_nota"]                        = $informacao["id_nota"];
            	$arrayNotas[$x]["nome"]                           = $informacao["nome"];
            	$arrayNotas[$x]["primeira_nota"]                  = $informacao["primeira_nota"];
            	$arrayNotas[$x]["segunda_nota"]                   = $informacao["segunda_nota"];
            	$arrayNotas[$x]["disciplina"]                     = $informacao["disciplina"];  

            	
         
            	$x++;
            }

            return $arrayNotas;
		}
		catch (Exception $e)
		{
				
			return $e->getMessage();;
		}
	}
	public function deletarNota($id_nota)
	{
		try
		{
	        $mySQL = new MySQL;
			$mySQL->connMySQL();

			$sql   = 'DELETE FROM notas
					  WHERE id_nota ="'. $id_nota .'"';

			$executar = $mySQL->runQuery($sql);
            
		}
		catch (Exception $e)
		{
				
			return $e->getMessage();;
		}
	}

}
?>