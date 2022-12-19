<?php

class ${nome_classe}DAO{

	public function carregar($${pk}){
		include("conexao.php");
		$sql = 'SELECT * FROM ${nome_tabela} WHERE ${pk} = :${pk}';
		$consulta = $conexao->prepare($sql);
		$consulta->bindValue(":${pk}",$${pk});
		$consulta->execute();
		return ($consulta->fetchAll(PDO::FETCH_ASSOC));
	}

	public function listarTodos(){
		include("conexao.php");
		$sql = 'SELECT * FROM ${nome_tabela}';
		$consulta = $conexao->prepare($sql);
		$consulta->execute();
		return ($consulta->fetchAll(PDO::FETCH_ASSOC));
	}
	
	public function listarTodosOrgenandoPor($coluna){
		include("conexao.php");
		$sql = 'SELECT * FROM ${nome_tabela} ORDER BY '.$coluna;
		$consulta = $conexao->prepare($sql);
		$consulta->execute();
		return ($consulta->fetchAll(PDO::FETCH_ASSOC));
	}
	
	public function deletar($${pk}){
		include("conexao.php");
		$sql = 'DELETE FROM ${nome_tabela} WHERE ${pk} = :${pk}';
		$consulta = $conexao->prepare($sql);
		$consulta->bindValue(":${pk}",$${pk});
		if($consulta->execute())
			return true;
		else
			return false;
	}
	
	public function inserir($${nome_classe_singular}){
		include("conexao.php");
		$sql = 'INSERT INTO ${nome_tabela} (${campos2}) VALUES (${campos3})';
		$consulta = $conexao->prepare($sql);
		${codigosBindValues}
		if($consulta->execute())
			return true;
		else
			return false;
	}
	
	public function atualizar($${nome_classe_singular}){
		include("conexao.php");
		$sql = 'UPDATE ${nome_tabela} SET ${camposAtualizar} WHERE ${pk} = :${pk}';
		$consulta = $conexao->prepare($sql);
		${codigosBindValues}
		if($consulta->execute())
			return true;
		else
			return false;
	}

	public function limparTabela(){
		include("conexao.php");
		$sql = 'DELETE FROM ${nome_tabela}';
		$consulta = $conexao->prepare($sql);
		if($consulta->execute())
			return true;
		else
			return false;
	}
}
?>