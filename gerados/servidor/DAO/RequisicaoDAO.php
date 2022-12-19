<?php

class RequisicaoDAO{

	public function carregar($){
		include("conexao.php");
		$sql = 'SELECT * FROM requisicao WHERE  = :';
		$consulta = $conexao->prepare($sql);
		$consulta->bindValue(":",$);
		$consulta->execute();
		return ($consulta->fetchAll(PDO::FETCH_ASSOC));
	}

	public function listarTodos(){
		include("conexao.php");
		$sql = 'SELECT * FROM requisicao';
		$consulta = $conexao->prepare($sql);
		$consulta->execute();
		return ($consulta->fetchAll(PDO::FETCH_ASSOC));
	}
	
	public function listarTodosOrgenandoPor($coluna){
		include("conexao.php");
		$sql = 'SELECT * FROM requisicao ORDER BY '.$coluna;
		$consulta = $conexao->prepare($sql);
		$consulta->execute();
		return ($consulta->fetchAll(PDO::FETCH_ASSOC));
	}
	
	public function deletar($){
		include("conexao.php");
		$sql = 'DELETE FROM requisicao WHERE  = :';
		$consulta = $conexao->prepare($sql);
		$consulta->bindValue(":",$);
		if($consulta->execute())
			return true;
		else
			return false;
	}
	
	public function inserir($requisicao){
		include("conexao.php");
		$sql = 'INSERT INTO requisicao (id, descricao, status, data) VALUES (:id, :descricao, :status, :data)';
		$consulta = $conexao->prepare($sql);
		$consulta->bindValue(':id',$requisicao->getId()); 
		$consulta->bindValue(':descricao',$requisicao->getDescricao()); 
		$consulta->bindValue(':status',$requisicao->getStatus()); 
		$consulta->bindValue(':data',$requisicao->getData()); 
		if($consulta->execute())
			return true;
		else
			return false;
	}
	
	public function atualizar($requisicao){
		include("conexao.php");
		$sql = 'UPDATE requisicao SET id = :id, descricao = :descricao, status = :status, data = :data WHERE  = :';
		$consulta = $conexao->prepare($sql);
		$consulta->bindValue(':id',$requisicao->getId()); 
		$consulta->bindValue(':descricao',$requisicao->getDescricao()); 
		$consulta->bindValue(':status',$requisicao->getStatus()); 
		$consulta->bindValue(':data',$requisicao->getData()); 
		if($consulta->execute())
			return true;
		else
			return false;
	}

	public function limparTabela(){
		include("conexao.php");
		$sql = 'DELETE FROM requisicao';
		$consulta = $conexao->prepare($sql);
		if($consulta->execute())
			return true;
		else
			return false;
	}
}
?>