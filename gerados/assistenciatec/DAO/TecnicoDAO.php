<?php

class TecnicoDAO{

	public function carregar($id){
		include("conexao.php");
		$sql = 'SELECT * FROM tecnico WHERE id = :id';
		$consulta = $conexao->prepare($sql);
		$consulta->bindValue(":id",$id);
		$consulta->execute();
		return ($consulta->fetchAll(PDO::FETCH_ASSOC));
	}

	public function listarTodos(){
		include("conexao.php");
		$sql = 'SELECT * FROM tecnico';
		$consulta = $conexao->prepare($sql);
		$consulta->execute();
		return ($consulta->fetchAll(PDO::FETCH_ASSOC));
	}
	
	public function listarTodosOrgenandoPor($coluna){
		include("conexao.php");
		$sql = 'SELECT * FROM tecnico ORDER BY '.$coluna;
		$consulta = $conexao->prepare($sql);
		$consulta->execute();
		return ($consulta->fetchAll(PDO::FETCH_ASSOC));
	}
	
	public function deletar($id){
		include("conexao.php");
		$sql = 'DELETE FROM tecnico WHERE id = :id';
		$consulta = $conexao->prepare($sql);
		$consulta->bindValue(":id",$id);
		if($consulta->execute())
			return true;
		else
			return false;
	}
	
	public function inserir($tecnico){
		include("conexao.php");
		$sql = 'INSERT INTO tecnico (id, nome, telefone, sexo, senha, email, data_nasc, categoria, cpf, rg) VALUES (:id, :nome, :telefone, :sexo, :senha, :email, :data_nasc, :categoria, :cpf, :rg)';
		$consulta = $conexao->prepare($sql);
		$consulta->bindValue(':id',$tecnico->getId()); 
		$consulta->bindValue(':nome',$tecnico->getNome()); 
		$consulta->bindValue(':telefone',$tecnico->getTelefone()); 
		$consulta->bindValue(':sexo',$tecnico->getSexo()); 
		$consulta->bindValue(':senha',$tecnico->getSenha()); 
		$consulta->bindValue(':email',$tecnico->getEmail()); 
		$consulta->bindValue(':data_nasc',$tecnico->getData_nasc()); 
		$consulta->bindValue(':categoria',$tecnico->getCategoria()); 
		$consulta->bindValue(':cpf',$tecnico->getCpf()); 
		$consulta->bindValue(':rg',$tecnico->getRg()); 
		if($consulta->execute())
			return true;
		else
			return false;
	}
	
	public function atualizar($tecnico){
		include("conexao.php");
		$sql = 'UPDATE tecnico SET id = :id, nome = :nome, telefone = :telefone, sexo = :sexo, senha = :senha, email = :email, data_nasc = :data_nasc, categoria = :categoria, cpf = :cpf, rg = :rg WHERE id = :id';
		$consulta = $conexao->prepare($sql);
		$consulta->bindValue(':id',$tecnico->getId()); 
		$consulta->bindValue(':nome',$tecnico->getNome()); 
		$consulta->bindValue(':telefone',$tecnico->getTelefone()); 
		$consulta->bindValue(':sexo',$tecnico->getSexo()); 
		$consulta->bindValue(':senha',$tecnico->getSenha()); 
		$consulta->bindValue(':email',$tecnico->getEmail()); 
		$consulta->bindValue(':data_nasc',$tecnico->getData_nasc()); 
		$consulta->bindValue(':categoria',$tecnico->getCategoria()); 
		$consulta->bindValue(':cpf',$tecnico->getCpf()); 
		$consulta->bindValue(':rg',$tecnico->getRg()); 
		if($consulta->execute())
			return true;
		else
			return false;
	}

	public function limparTabela(){
		include("conexao.php");
		$sql = 'DELETE FROM tecnico';
		$consulta = $conexao->prepare($sql);
		if($consulta->execute())
			return true;
		else
			return false;
	}
}
?>