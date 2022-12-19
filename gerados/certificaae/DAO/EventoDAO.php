<?php

class EventoDAO{

	//Carrega um elemento pela chave primária
	public function carregar($id){
		$sql = 'SELECT * FROM evento WHERE id = :id';
		$consulta = $conexao->prepare($sql);
		$consulta->bindValue(":id",$id);
		$resultado = $consulta->execute();
		return ($resultado->fetchAll(PDO::FETCH_ASSOC));
	}

	//Lista todos os elementos da tabela
	public function listarTodos(){
		$sql = 'SELECT * FROM evento';
		$consulta = $conexao->prepare($sql);
		$resultado = $consulta->execute();
		return ($resultado->fetchAll(PDO::FETCH_ASSOC));
	}
	
	//Lista todos os elementos da tabela listando ordenados por uma coluna específica
	public function listarTodosOrgenandoPor($coluna){
		$sql = 'SELECT * FROM evento ORDER BY '.$coluna;
		$consulta = $conexao->prepare($sql);
		$resultado = $consulta->execute();
		return ($resultado->fetchAll(PDO::FETCH_ASSOC));
	}
	
	//Apaga um elemento da tabela
	public function deletar($id){
		$sql = 'DELETE FROM evento WHERE id = :id';
		$consulta = $conexao->prepare($sql);
		$consulta->bindValue(":id",$id);
		$consulta->execute();
	}
	
	//Insere um elemento na tabela
	public function inserir($evento){
		$sql = 'INSERT INTO evento (nome, id, local, data, duracao) VALUES (:nome, :id, :local, :data, :duracao)';
		$consulta = $conexao->prepare($sql);
		$consulta->bindValue(':nome',$evento->getNome()); 
		$consulta->bindValue(':id',$evento->getId()); 
		$consulta->bindValue(':local',$evento->getLocal()); 
		$consulta->bindValue(':data',$evento->getData()); 
		$consulta->bindValue(':duracao',$evento->getDuracao()); 
		$consulta->execute();
	}
	
	//Atualiza um elemento na tabela
	public function atualizar($evento){
		$sql = 'UPDATE evento SET nome = :nome, id = :id, local = :local, data = :data, duracao = :duracao WHERE id = :id';
		$consulta = $conexao->prepare($sql);
		$consulta->bindValue(':nome',$evento->getNome()); 
		$consulta->bindValue(':id',$evento->getId()); 
		$consulta->bindValue(':local',$evento->getLocal()); 
		$consulta->bindValue(':data',$evento->getData()); 
		$consulta->bindValue(':duracao',$evento->getDuracao()); 
		$consulta->execute();
	}

	//Apaga todos os elementos da tabela
	public function limparTabela(){
		$sql = 'DELETE FROM evento';
		$consulta = $conexao->prepare($sql);
		$consulta->execute();
	}
?>