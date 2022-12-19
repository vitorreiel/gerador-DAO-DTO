<?php

class PalestranteDAO{

	//Carrega um elemento pela chave primária
	public function carregar($id){
		$sql = 'SELECT * FROM palestrante WHERE id = :id';
		$consulta = $conexao->prepare($sql);
		$consulta->bindValue(":id",$id);
		$resultado = $consulta->execute();
		return ($resultado->fetchAll(PDO::FETCH_ASSOC));
	}

	//Lista todos os elementos da tabela
	public function listarTodos(){
		$sql = 'SELECT * FROM palestrante';
		$consulta = $conexao->prepare($sql);
		$resultado = $consulta->execute();
		return ($resultado->fetchAll(PDO::FETCH_ASSOC));
	}
	
	//Lista todos os elementos da tabela listando ordenados por uma coluna específica
	public function listarTodosOrgenandoPor($coluna){
		$sql = 'SELECT * FROM palestrante ORDER BY '.$coluna;
		$consulta = $conexao->prepare($sql);
		$resultado = $consulta->execute();
		return ($resultado->fetchAll(PDO::FETCH_ASSOC));
	}
	
	//Apaga um elemento da tabela
	public function deletar($id){
		$sql = 'DELETE FROM palestrante WHERE id = :id';
		$consulta = $conexao->prepare($sql);
		$consulta->bindValue(":id",$id);
		$consulta->execute();
	}
	
	//Insere um elemento na tabela
	public function inserir($palestrante){
		$sql = 'INSERT INTO palestrante (id, nome, email, cargo, imagem_assinatura, cpf) VALUES (:id, :nome, :email, :cargo, :imagem_assinatura, :cpf)';
		$consulta = $conexao->prepare($sql);
		$consulta->bindValue(':id',$palestrante->getId()); 
		$consulta->bindValue(':nome',$palestrante->getNome()); 
		$consulta->bindValue(':email',$palestrante->getEmail()); 
		$consulta->bindValue(':cargo',$palestrante->getCargo()); 
		$consulta->bindValue(':imagem_assinatura',$palestrante->getImagem_assinatura()); 
		$consulta->bindValue(':cpf',$palestrante->getCpf()); 
		$consulta->execute();
	}
	
	//Atualiza um elemento na tabela
	public function atualizar($palestrante){
		$sql = 'UPDATE palestrante SET id = :id, nome = :nome, email = :email, cargo = :cargo, imagem_assinatura = :imagem_assinatura, cpf = :cpf WHERE id = :id';
		$consulta = $conexao->prepare($sql);
		$consulta->bindValue(':id',$palestrante->getId()); 
		$consulta->bindValue(':nome',$palestrante->getNome()); 
		$consulta->bindValue(':email',$palestrante->getEmail()); 
		$consulta->bindValue(':cargo',$palestrante->getCargo()); 
		$consulta->bindValue(':imagem_assinatura',$palestrante->getImagem_assinatura()); 
		$consulta->bindValue(':cpf',$palestrante->getCpf()); 
		$consulta->execute();
	}

	//Apaga todos os elementos da tabela
	public function limparTabela(){
		$sql = 'DELETE FROM palestrante';
		$consulta = $conexao->prepare($sql);
		$consulta->execute();
	}
?>