<?php
 
class ParticipanteDAO{

	//Carrega um elemento pela chave primária
	public function carregar($id){
		$sql = 'SELECT * FROM participante WHERE id = :id';
		$consulta = $conexao->prepare($sql);
		$consulta->bindValue(":id",$id);
		$resultado = $consulta->execute();
		return ($resultado->fetchAll(PDO::FETCH_ASSOC));
	}

	//Lista todos os elementos da tabela
	public function listarTodos(){
		$sql = 'SELECT * FROM participante';
		$consulta = $conexao->prepare($sql);
		$resultado = $consulta->execute();
		return ($resultado->fetchAll(PDO::FETCH_ASSOC));
	}
	
	//Lista todos os elementos da tabela listando ordenados por uma coluna específica
	public function listarTodosOrgenandoPor($coluna){
		$sql = 'SELECT * FROM participante ORDER BY '.$coluna;
		$consulta = $conexao->prepare($sql);
		$resultado = $consulta->execute();
		return ($resultado->fetchAll(PDO::FETCH_ASSOC));
	}
	
	//Apaga um elemento da tabela
	public function deletar($id){
		$sql = 'DELETE FROM participante WHERE id = :id';
		$consulta = $conexao->prepare($sql);
		$consulta->bindValue(":id",$id);
		$consulta->execute();
	}
	
	//Insere um elemento na tabela
	public function inserir($participante){
		$sql = 'INSERT INTO participante (id, nome, email, cpf) VALUES (:id, :nome, :email, :cpf)';
		$consulta = $conexao->prepare($sql);
		$consulta->bindValue(':id',$participante->getId()); 
		$consulta->bindValue(':nome',$participante->getNome()); 
		$consulta->bindValue(':email',$participante->getEmail()); 
		$consulta->bindValue(':cpf',$participante->getCpf()); 
		$consulta->execute();
	}
	
	//Atualiza um elemento na tabela
	public function atualizar($participante){
		$sql = 'UPDATE participante SET id = :id, nome = :nome, email = :email, cpf = :cpf WHERE id = :id';
		$consulta = $conexao->prepare($sql);
		$consulta->bindValue(':id',$participante->getId()); 
		$consulta->bindValue(':nome',$participante->getNome()); 
		$consulta->bindValue(':email',$participante->getEmail()); 
		$consulta->bindValue(':cpf',$participante->getCpf()); 
		$consulta->execute();
	}

	//Apaga todos os elementos da tabela
	public function limparTabela(){
		$sql = 'DELETE FROM participante';
		$consulta = $conexao->prepare($sql);
		$consulta->execute();
	}
?>