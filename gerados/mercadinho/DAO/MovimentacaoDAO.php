<?php

class MovimentacaoDAO{

	public function carregar($id){
		include("conexao.php");
		$sql = 'SELECT * FROM movimentacao WHERE id = :id';
		$consulta = $conexao->prepare($sql);
		$consulta->bindValue(":id",$id);
		$consulta->execute();
		return ($consulta->fetchAll(PDO::FETCH_ASSOC));
	}

	public function listarTodos(){
		include("conexao.php");
		$sql = 'SELECT * FROM movimentacao';
		$consulta = $conexao->prepare($sql);
		$consulta->execute();
		return ($consulta->fetchAll(PDO::FETCH_ASSOC));
	}
	
	public function listarTodosOrgenandoPor($coluna){
		include("conexao.php");
		$sql = 'SELECT * FROM movimentacao ORDER BY '.$coluna;
		$consulta = $conexao->prepare($sql);
		$consulta->execute();
		return ($consulta->fetchAll(PDO::FETCH_ASSOC));
	}
	
	public function deletar($id){
		include("conexao.php");
		$sql = 'DELETE FROM movimentacao WHERE id = :id';
		$consulta = $conexao->prepare($sql);
		$consulta->bindValue(":id",$id);
		if($consulta->execute())
			return true;
		else
			return false;
	}
	
	public function inserir($movimentacao){
		include("conexao.php");
		$sql = 'INSERT INTO movimentacao (id, id_cliente, dt, valor_entregue, valor_prod, des, obs) VALUES (:id, :id_cliente, :dt, :valor_entregue, :valor_prod, :des, :obs)';
		$consulta = $conexao->prepare($sql);
		$consulta->bindValue(':id',$movimentacao->getId()); 
		$consulta->bindValue(':id_cliente',$movimentacao->getId_cliente()); 
		$consulta->bindValue(':dt',$movimentacao->getDt()); 
		$consulta->bindValue(':valor_entregue',$movimentacao->getValor_entregue()); 
		$consulta->bindValue(':valor_prod',$movimentacao->getValor_prod()); 
		$consulta->bindValue(':des',$movimentacao->getDes()); 
		$consulta->bindValue(':obs',$movimentacao->getObs()); 
		if($consulta->execute())
			return true;
		else
			return false;
	}
	
	public function atualizar($movimentacao){
		include("conexao.php");
		$sql = 'UPDATE movimentacao SET id = :id, id_cliente = :id_cliente, dt = :dt, valor_entregue = :valor_entregue, valor_prod = :valor_prod, des = :des, obs = :obs WHERE id = :id';
		$consulta = $conexao->prepare($sql);
		$consulta->bindValue(':id',$movimentacao->getId()); 
		$consulta->bindValue(':id_cliente',$movimentacao->getId_cliente()); 
		$consulta->bindValue(':dt',$movimentacao->getDt()); 
		$consulta->bindValue(':valor_entregue',$movimentacao->getValor_entregue()); 
		$consulta->bindValue(':valor_prod',$movimentacao->getValor_prod()); 
		$consulta->bindValue(':des',$movimentacao->getDes()); 
		$consulta->bindValue(':obs',$movimentacao->getObs()); 
		if($consulta->execute())
			return true;
		else
			return false;
	}

	public function limparTabela(){
		include("conexao.php");
		$sql = 'DELETE FROM movimentacao';
		$consulta = $conexao->prepare($sql);
		if($consulta->execute())
			return true;
		else
			return false;
	}
}
?>