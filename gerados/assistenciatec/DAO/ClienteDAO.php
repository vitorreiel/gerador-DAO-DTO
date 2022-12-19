<?php

class ClienteDAO{

	public function carregar($id){
		include("conexao.php");
		$sql = 'SELECT * FROM clientes WHERE id = :id';
		$consulta = $conexao->prepare($sql);
		$consulta->bindValue(":id",$id);
		$consulta->execute();
		return ($consulta->fetchAll(PDO::FETCH_ASSOC));
	}

	public function listarTodos(){
		include("conexao.php");
		$sql = 'SELECT * FROM clientes';
		$consulta = $conexao->prepare($sql);
		$consulta->execute();
		return ($consulta->fetchAll(PDO::FETCH_ASSOC));
	}
	
	public function listarTodosOrgenandoPor($coluna){
		include("conexao.php");
		$sql = 'SELECT * FROM clientes ORDER BY '.$coluna;
		$consulta = $conexao->prepare($sql);
		$consulta->execute();
		return ($consulta->fetchAll(PDO::FETCH_ASSOC));
	}
	
	public function deletar($id){
		include("conexao.php");
		$sql = 'DELETE FROM clientes WHERE id = :id';
		$consulta = $conexao->prepare($sql);
		$consulta->bindValue(":id",$id);
		if($consulta->execute())
			return true;
		else
			return false;
	}
	
	public function inserir($cliente){
		include("conexao.php");
		$sql = 'INSERT INTO clientes (id, tel, nome, senha, data_nasc, email) VALUES (:id, :tel, :nome, :senha, :data_nasc, :email)';
		$consulta = $conexao->prepare($sql);
		$consulta->bindValue(':id',$cliente->getId()); 
		$consulta->bindValue(':tel',$cliente->getTel()); 
		$consulta->bindValue(':nome',$cliente->getNome()); 
		$consulta->bindValue(':senha',$cliente->getSenha()); 
		$consulta->bindValue(':data_nasc',$cliente->getData_nasc()); 
		$consulta->bindValue(':email',$cliente->getEmail()); 
		if($consulta->execute())
			return true;
		else
			return false;
	}
	
	public function atualizar($cliente){
		include("conexao.php");
		$sql = 'UPDATE clientes SET id = :id, tel = :tel, nome = :nome, senha = :senha, data_nasc = :data_nasc, email = :email WHERE id = :id';
		$consulta = $conexao->prepare($sql);
		$consulta->bindValue(':id',$cliente->getId()); 
		$consulta->bindValue(':tel',$cliente->getTel()); 
		$consulta->bindValue(':nome',$cliente->getNome()); 
		$consulta->bindValue(':senha',$cliente->getSenha()); 
		$consulta->bindValue(':data_nasc',$cliente->getData_nasc()); 
		$consulta->bindValue(':email',$cliente->getEmail()); 
		if($consulta->execute())
			return true;
		else
			return false;
	}

	public function limparTabela(){
		include("conexao.php");
		$sql = 'DELETE FROM clientes';
		$consulta = $conexao->prepare($sql);
		if($consulta->execute())
			return true;
		else
			return false;
	}
}
?>