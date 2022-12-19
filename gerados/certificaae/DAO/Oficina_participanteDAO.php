<?php

class Oficina_participanteDAO{

	//Carrega um elemento pela chave primária
	public function carregar($id){
		$sql = 'SELECT * FROM oficina_participante WHERE id = :id';
		$consulta = $conexao->prepare($sql);
		$consulta->bindValue(":id",$id);
		$resultado = $consulta->execute();
		return ($resultado->fetchAll(PDO::FETCH_ASSOC));
	}

	//Lista todos os elementos da tabela
	public function listarTodos(){
		$sql = 'SELECT * FROM oficina_participante';
		$consulta = $conexao->prepare($sql);
		$resultado = $consulta->execute();
		return ($resultado->fetchAll(PDO::FETCH_ASSOC));
	}
	
	//Lista todos os elementos da tabela listando ordenados por uma coluna específica
	public function listarTodosOrgenandoPor($coluna){
		$sql = 'SELECT * FROM oficina_participante ORDER BY '.$coluna;
		$consulta = $conexao->prepare($sql);
		$resultado = $consulta->execute();
		return ($resultado->fetchAll(PDO::FETCH_ASSOC));
	}
	
	//Apaga um elemento da tabela
	public function deletar($id){
		$sql = 'DELETE FROM oficina_participante WHERE id = :id';
		$consulta = $conexao->prepare($sql);
		$consulta->bindValue(":id",$id);
		$consulta->execute();
	}
	
	//Insere um elemento na tabela
	public function inserir($oficina_participante){
		$sql = 'INSERT INTO oficina_participante (id, id_participante, id_oficina, presenca) VALUES (:id, :id_participante, :id_oficina, :presenca)';
		$consulta = $conexao->prepare($sql);
		$consulta->bindValue(':id',$oficina_participante->getId()); 
		$consulta->bindValue(':id_participante',$oficina_participante->getId_participante()); 
		$consulta->bindValue(':id_oficina',$oficina_participante->getId_oficina()); 
		$consulta->bindValue(':presenca',$oficina_participante->getPresenca()); 
		$consulta->execute();
	}
	
	//Atualiza um elemento na tabela
	public function atualizar($oficina_participante){
		$sql = 'UPDATE oficina_participante SET id = :id, id_participante = :id_participante, id_oficina = :id_oficina, presenca = :presenca WHERE id = :id';
		$consulta = $conexao->prepare($sql);
		$consulta->bindValue(':id',$oficina_participante->getId()); 
		$consulta->bindValue(':id_participante',$oficina_participante->getId_participante()); 
		$consulta->bindValue(':id_oficina',$oficina_participante->getId_oficina()); 
		$consulta->bindValue(':presenca',$oficina_participante->getPresenca()); 
		$consulta->execute();
	}

	//Apaga todos os elementos da tabela
	public function limparTabela(){
		$sql = 'DELETE FROM oficina_participante';
		$consulta = $conexao->prepare($sql);
		$consulta->execute();
	}
?>