<?php

class HistoricoDAO{

	public function carregar($id){
		include("conexao.php");
		$sql = 'SELECT * FROM historico WHERE id = :id';
		$consulta = $conexao->prepare($sql);
		$consulta->bindValue(":id",$id);
		$consulta->execute();
		return ($consulta->fetchAll(PDO::FETCH_ASSOC));
	}

	public function listarTodos(){
		include("conexao.php");
		$sql = 'SELECT * FROM historico';
		$consulta = $conexao->prepare($sql);
		$consulta->execute();
		return ($consulta->fetchAll(PDO::FETCH_ASSOC));
	}
	
	public function listarTodosOrgenandoPor($coluna){
		include("conexao.php");
		$sql = 'SELECT * FROM historico ORDER BY '.$coluna;
		$consulta = $conexao->prepare($sql);
		$consulta->execute();
		return ($consulta->fetchAll(PDO::FETCH_ASSOC));
	}
	
	public function deletar($id){
		include("conexao.php");
		$sql = 'DELETE FROM historico WHERE id = :id';
		$consulta = $conexao->prepare($sql);
		$consulta->bindValue(":id",$id);
		if($consulta->execute())
			return true;
		else
			return false;
	}
	
	public function inserir($historico){
		include("conexao.php");
		$sql = 'INSERT INTO historico (id, descricao, status, data) VALUES (:id, :descricao, :status, :data)';
		$consulta = $conexao->prepare($sql);
		$consulta->bindValue(':id',$historico->getId()); 
		$consulta->bindValue(':descricao',$historico->getDescricao()); 
		$consulta->bindValue(':status',$historico->getStatus()); 
		$consulta->bindValue(':data',$historico->getData()); 
		if($consulta->execute())
			return true;
		else
			return false;
	}
	
	public function atualizar($historico){
		include("conexao.php");
		$sql = 'UPDATE historico SET id = :id, descricao = :descricao, status = :status, data = :data WHERE id = :id';
		$consulta = $conexao->prepare($sql);
		$consulta->bindValue(':id',$historico->getId()); 
		$consulta->bindValue(':descricao',$historico->getDescricao()); 
		$consulta->bindValue(':status',$historico->getStatus()); 
		$consulta->bindValue(':data',$historico->getData()); 
		if($consulta->execute())
			return true;
		else
			return false;
	}

	public function limparTabela(){
		include("conexao.php");
		$sql = 'DELETE FROM historico';
		$consulta = $conexao->prepare($sql);
		if($consulta->execute())
			return true;
		else
			return false;
	}
}
?>