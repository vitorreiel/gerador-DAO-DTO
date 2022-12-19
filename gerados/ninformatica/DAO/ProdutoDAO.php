<?php

class ProdutoDAO{

	public function carregar($id){
		include("conexao.php");
		$sql = 'SELECT * FROM produtos WHERE id = :id';
		$consulta = $conexao->prepare($sql);
		$consulta->bindValue(":id",$id);
		$consulta->execute();
		return ($consulta->fetchAll(PDO::FETCH_ASSOC));
	}

	public function listarTodos(){
		include("conexao.php");
		$sql = 'SELECT * FROM produtos';
		$consulta = $conexao->prepare($sql);
		$consulta->execute();
		return ($consulta->fetchAll(PDO::FETCH_ASSOC));
	}
	
	public function listarTodosOrgenandoPor($coluna){
		include("conexao.php");
		$sql = 'SELECT * FROM produtos ORDER BY '.$coluna;
		$consulta = $conexao->prepare($sql);
		$consulta->execute();
		return ($consulta->fetchAll(PDO::FETCH_ASSOC));
	}
	
	public function deletar($id){
		include("conexao.php");
		$sql = 'DELETE FROM produtos WHERE id = :id';
		$consulta = $conexao->prepare($sql);
		$consulta->bindValue(":id",$id);
		if($consulta->execute())
			return true;
		else
			return false;
	}
	
	public function inserir($produto){
		include("conexao.php");
		$sql = 'INSERT INTO produtos (id, nome, valor) VALUES (:id, :nome, :valor)';
		$consulta = $conexao->prepare($sql);
		$consulta->bindValue(':id',$produto->getId()); 
		$consulta->bindValue(':nome',$produto->getNome()); 
		$consulta->bindValue(':valor',$produto->getValor()); 
		if($consulta->execute())
			return true;
		else
			return false;
	}
	
	public function atualizar($produto){
		include("conexao.php");
		$sql = 'UPDATE produtos SET id = :id, nome = :nome, valor = :valor WHERE id = :id';
		$consulta = $conexao->prepare($sql);
		$consulta->bindValue(':id',$produto->getId()); 
		$consulta->bindValue(':nome',$produto->getNome()); 
		$consulta->bindValue(':valor',$produto->getValor()); 
		if($consulta->execute())
			return true;
		else
			return false;
	}

	public function limparTabela(){
		include("conexao.php");
		$sql = 'DELETE FROM produtos';
		$consulta = $conexao->prepare($sql);
		if($consulta->execute())
			return true;
		else
			return false;
	}
}
?>