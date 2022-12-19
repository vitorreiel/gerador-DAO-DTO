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
		$sql = 'INSERT INTO historico (id, emissor, data_h, produto, valor_entregue, valor_restante) VALUES (:id, :emissor, :data_h, :produto, :valor_entregue, :valor_restante)';
		$consulta = $conexao->prepare($sql);
		$consulta->bindValue(':id',$historico->getId()); 
		$consulta->bindValue(':emissor',$historico->getEmissor()); 
		$consulta->bindValue(':data_h',$historico->getData_h()); 
		$consulta->bindValue(':produto',$historico->getProduto()); 
		$consulta->bindValue(':valor_entregue',$historico->getValor_entregue()); 
		$consulta->bindValue(':valor_restante',$historico->getValor_restante()); 
		if($consulta->execute())
			return true;
		else
			return false;
	}
	
	public function atualizar($historico){
		include("conexao.php");
		$sql = 'UPDATE historico SET id = :id, emissor = :emissor, data_h = :data_h, produto = :produto, valor_entregue = :valor_entregue, valor_restante = :valor_restante WHERE id = :id';
		$consulta = $conexao->prepare($sql);
		$consulta->bindValue(':id',$historico->getId()); 
		$consulta->bindValue(':emissor',$historico->getEmissor()); 
		$consulta->bindValue(':data_h',$historico->getData_h()); 
		$consulta->bindValue(':produto',$historico->getProduto()); 
		$consulta->bindValue(':valor_entregue',$historico->getValor_entregue()); 
		$consulta->bindValue(':valor_restante',$historico->getValor_restante()); 
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