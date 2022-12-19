<?php

class EventoDAO{

	//Carrega um elemento pela chave primária
	public function carregar($id){
		include("conexao.php");
		$sql = 'SELECT * FROM eventos WHERE id = :id';
		$consulta = $conexao->prepare($sql);
		$consulta->bindValue(":id",$id);
		$consulta->execute();
		return ($consulta->fetchAll(PDO::FETCH_ASSOC));
	}

	//Lista todos os elementos da tabela
	public function listarTodos(){
		include("conexao.php");
		$sql = 'SELECT * FROM eventos';
		$consulta = $conexao->prepare($sql);
		$consulta->execute();
		return ($consulta->fetchAll(PDO::FETCH_ASSOC));
	}
	
	//Lista todos os elementos da tabela listando ordenados por uma coluna específica
	public function listarTodosOrgenandoPor($coluna){
		include("conexao.php");
		$sql = 'SELECT * FROM eventos ORDER BY '.$coluna;
		$consulta = $conexao->prepare($sql);
		$consulta->execute();
		return ($consulta->fetchAll(PDO::FETCH_ASSOC));
	}
	
	//Apaga um elemento da tabela
	public function deletar($id){
		include("conexao.php");
		$sql = 'DELETE FROM eventos WHERE id = :id';
		$consulta = $conexao->prepare($sql);
		$consulta->bindValue(":id",$id);
		if($consulta->execute())
			return true;
		else
			return false;
	}
	
	//Insere um elemento na tabela
	public function inserir($evento){
		include("conexao.php");
		$sql = 'INSERT INTO eventos (id, titulo, cor, inicio, fim, descricao) VALUES (:id, :titulo, :cor, :inicio, :fim, :descricao)';
		$consulta = $conexao->prepare($sql);
		$consulta->bindValue(':id',$evento->getId()); 
		$consulta->bindValue(':titulo',$evento->getTitulo()); 
		$consulta->bindValue(':cor',$evento->getCor()); 
		$consulta->bindValue(':inicio',$evento->getInicio()); 
		$consulta->bindValue(':fim',$evento->getFim()); 
		$consulta->bindValue(':descricao',$evento->getDescricao()); 
		if($consulta->execute())
			return true;
		else
			return false;
	}
	
	//Atualiza um elemento na tabela
	public function atualizar($evento){
		include("conexao.php");
		$sql = 'UPDATE eventos SET id = :id, titulo = :titulo, cor = :cor, inicio = :inicio, fim = :fim, descricao = :descricao WHERE id = :id';
		$consulta = $conexao->prepare($sql);
		$consulta->bindValue(':id',$evento->getId()); 
		$consulta->bindValue(':titulo',$evento->getTitulo()); 
		$consulta->bindValue(':cor',$evento->getCor()); 
		$consulta->bindValue(':inicio',$evento->getInicio()); 
		$consulta->bindValue(':fim',$evento->getFim()); 
		$consulta->bindValue(':descricao',$evento->getDescricao()); 
		if($consulta->execute())
			return true;
		else
			return false;
	}

	//Apaga todos os elementos da tabela
	public function limparTabela(){
		include("conexao.php");
		$sql = 'DELETE FROM eventos';
		$consulta = $conexao->prepare($sql);
		if($consulta->execute())
			return true;
		else
			return false;
	}
}
?>