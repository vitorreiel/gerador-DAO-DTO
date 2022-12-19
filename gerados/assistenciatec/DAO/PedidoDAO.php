<?php

class PedidoDAO{

	public function carregar($id){
		include("conexao.php");
		$sql = 'SELECT * FROM pedido WHERE id = :id';
		$consulta = $conexao->prepare($sql);
		$consulta->bindValue(":id",$id);
		$consulta->execute();
		return ($consulta->fetchAll(PDO::FETCH_ASSOC));
	}

	public function listarTodos(){
		include("conexao.php");
		$sql = 'SELECT * FROM pedido';
		$consulta = $conexao->prepare($sql);
		$consulta->execute();
		return ($consulta->fetchAll(PDO::FETCH_ASSOC));
	}
	
	public function listarTodosOrgenandoPor($coluna){
		include("conexao.php");
		$sql = 'SELECT * FROM pedido ORDER BY '.$coluna;
		$consulta = $conexao->prepare($sql);
		$consulta->execute();
		return ($consulta->fetchAll(PDO::FETCH_ASSOC));
	}
	
	public function deletar($id){
		include("conexao.php");
		$sql = 'DELETE FROM pedido WHERE id = :id';
		$consulta = $conexao->prepare($sql);
		$consulta->bindValue(":id",$id);
		if($consulta->execute())
			return true;
		else
			return false;
	}
	
	public function inserir($pedido){
		include("conexao.php");
		$sql = 'INSERT INTO pedido (id, foto, data_pedido, data_entrega, valor, descricao) VALUES (:id, :foto, :data_pedido, :data_entrega, :valor, :descricao)';
		$consulta = $conexao->prepare($sql);
		$consulta->bindValue(':id',$pedido->getId()); 
		$consulta->bindValue(':foto',$pedido->getFoto()); 
		$consulta->bindValue(':data_pedido',$pedido->getData_pedido()); 
		$consulta->bindValue(':data_entrega',$pedido->getData_entrega()); 
		$consulta->bindValue(':valor',$pedido->getValor()); 
		$consulta->bindValue(':descricao',$pedido->getDescricao()); 
		if($consulta->execute())
			return true;
		else
			return false;
	}
	
	public function atualizar($pedido){
		include("conexao.php");
		$sql = 'UPDATE pedido SET id = :id, foto = :foto, data_pedido = :data_pedido, data_entrega = :data_entrega, valor = :valor, descricao = :descricao WHERE id = :id';
		$consulta = $conexao->prepare($sql);
		$consulta->bindValue(':id',$pedido->getId()); 
		$consulta->bindValue(':foto',$pedido->getFoto()); 
		$consulta->bindValue(':data_pedido',$pedido->getData_pedido()); 
		$consulta->bindValue(':data_entrega',$pedido->getData_entrega()); 
		$consulta->bindValue(':valor',$pedido->getValor()); 
		$consulta->bindValue(':descricao',$pedido->getDescricao()); 
		if($consulta->execute())
			return true;
		else
			return false;
	}

	public function limparTabela(){
		include("conexao.php");
		$sql = 'DELETE FROM pedido';
		$consulta = $conexao->prepare($sql);
		if($consulta->execute())
			return true;
		else
			return false;
	}
}
?>