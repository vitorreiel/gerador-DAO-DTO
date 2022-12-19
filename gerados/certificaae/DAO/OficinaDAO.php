<?php

class OficinaDAO{

	//Carrega um elemento pela chave primária
	public function carregar($id){
		$sql = 'SELECT * FROM oficina WHERE id = :id';
		$consulta = $conexao->prepare($sql);
		$consulta->bindValue(":id",$id);
		$resultado = $consulta->execute();
		return ($resultado->fetchAll(PDO::FETCH_ASSOC));
	}

	//Lista todos os elementos da tabela
	public function listarTodos(){
		$sql = 'SELECT * FROM oficina';
		$consulta = $conexao->prepare($sql);
		$resultado = $consulta->execute();
		return ($resultado->fetchAll(PDO::FETCH_ASSOC));
	}
	
	//Lista todos os elementos da tabela listando ordenados por uma coluna específica
	public function listarTodosOrgenandoPor($coluna){
		$sql = 'SELECT * FROM oficina ORDER BY '.$coluna;
		$consulta = $conexao->prepare($sql);
		$resultado = $consulta->execute();
		return ($resultado->fetchAll(PDO::FETCH_ASSOC));
	}
	
	//Apaga um elemento da tabela
	public function deletar($id){
		$sql = 'DELETE FROM oficina WHERE id = :id';
		$consulta = $conexao->prepare($sql);
		$consulta->bindValue(":id",$id);
		$consulta->execute();
	}
	
	//Insere um elemento na tabela
	public function inserir($oficina){
		$sql = 'INSERT INTO oficina (id, nome, data, carga_horaria, horario, id_evento, tipo, vagas) VALUES (:id, :nome, :data, :carga_horaria, :horario, :id_evento, :tipo, :vagas)';
		$consulta = $conexao->prepare($sql);
		$consulta->bindValue(':id',$oficina->getId()); 
		$consulta->bindValue(':nome',$oficina->getNome()); 
		$consulta->bindValue(':data',$oficina->getData()); 
		$consulta->bindValue(':carga_horaria',$oficina->getCarga_horaria()); 
		$consulta->bindValue(':horario',$oficina->getHorario()); 
		$consulta->bindValue(':id_evento',$oficina->getId_evento()); 
		$consulta->bindValue(':tipo',$oficina->getTipo()); 
		$consulta->bindValue(':vagas',$oficina->getVagas()); 
		$consulta->execute();
	}
	
	//Atualiza um elemento na tabela
	public function atualizar($oficina){
		$sql = 'UPDATE oficina SET id = :id, nome = :nome, data = :data, carga_horaria = :carga_horaria, horario = :horario, id_evento = :id_evento, tipo = :tipo, vagas = :vagas WHERE id = :id';
		$consulta = $conexao->prepare($sql);
		$consulta->bindValue(':id',$oficina->getId()); 
		$consulta->bindValue(':nome',$oficina->getNome()); 
		$consulta->bindValue(':data',$oficina->getData()); 
		$consulta->bindValue(':carga_horaria',$oficina->getCarga_horaria()); 
		$consulta->bindValue(':horario',$oficina->getHorario()); 
		$consulta->bindValue(':id_evento',$oficina->getId_evento()); 
		$consulta->bindValue(':tipo',$oficina->getTipo()); 
		$consulta->bindValue(':vagas',$oficina->getVagas()); 
		$consulta->execute();
	}

	//Apaga todos os elementos da tabela
	public function limparTabela(){
		$sql = 'DELETE FROM oficina';
		$consulta = $conexao->prepare($sql);
		$consulta->execute();
	}
?>