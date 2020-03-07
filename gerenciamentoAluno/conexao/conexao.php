<?php 
class MySQL
{

//	var $host   = 'localhost';
//	var $usr    = 'userperfisiospre';
//	var $pw     = '00p3rf1s10sPREMIUM2016';
//	var $bDados = 'perfisios_premium_treinamento';
	
	var $host   = '127.0.0.1';
	var $usr    = 'root';
	var $pw     = '';
	var $bDados = 'gerenciamento_alunos';

	var $sql;
	var $conn;
	var $resultado;
	
	function connMySQL(){

		$this->conn = mysqli_connect($this->host, $this->usr, $this->pw, $this->bDados);
		if (mysqli_connect_errno()){
			echo '<p>N&atilde;o foi poss&iacute;vel conectar-se ao servidor MySQL.</p>
				  <p><b>Erro MySQL ['. mysqli_connect_errno() .']: ' . mysqli_connect_error() . '</b></p>';
			exit();
		}
	}	
	function runQuery($sql){
		$this->connMySQL();
		
		if($this->resultado = mysqli_query($this->conn, $sql)){
			//$this->logQuery($sql);
			return $this->resultado;
		}else{
			echo '<p>N&atilde;o foi poss&iacute;vel executar a instru&ccedil;&atilde;o SQL.</p>
				  <p><b>Erro MySQL ['. mysqli_errno($this->conn) .']: ' . mysqli_error($this->conn) . '</b></p>
				   <p><pre>'.$sql.'</pre></p>';
			exit();
		}
	}
	
	function closeConnMySQL(){
		return mysqli_close($this->conn);
	}
	
}
?>