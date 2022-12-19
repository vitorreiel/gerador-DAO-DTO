<?php

class AdminDAO{

	public function carregar($id){
		include("conexao.php");
		$sql = 'SELECT * FROM admin WHERE id = :id';
		$consulta = $conexao->prepare($sql);
		$consulta->bindValue(":id",$id);
		$consulta->execute();
		return ($consulta->fetchAll(PDO::FETCH_ASSOC));
	}

	public function listarTodos(){
		include("conexao.php");
		$sql = 'SELECT * FROM admin';
		$consulta = $conexao->prepare($sql);
		$consulta->execute();
		return ($consulta->fetchAll(PDO::FETCH_ASSOC));
	}
	
	public function listarTodosOrgenandoPor($coluna){
		include("conexao.php");
		$sql = 'SELECT * FROM admin ORDER BY '.$coluna;
		$consulta = $conexao->prepare($sql);
		$consulta->execute();
		return ($consulta->fetchAll(PDO::FETCH_ASSOC));
	}
	
	public function deletar($id){
		include("conexao.php");
		$sql = 'DELETE FROM admin WHERE id = :id';
		$consulta = $conexao->prepare($sql);
		$consulta->bindValue(":id",$id);
		if($consulta->execute())
			return true;
		else
			return false;
	}
	
	public function inserir($admin){
		include("conexao.php");
		$sql = 'INSERT INTO admin (id, email, senha) VALUES (:id, :email, :senha)';
		$consulta = $conexao->prepare($sql);
		$consulta->bindValue(':id',$admin->getId()); 
		$consulta->bindValue(':email',$admin->getEmail()); 
		$consulta->bindValue(':senha',$admin->getSenha()); 
		if($consulta->execute())
			return true;
		else
			return false;
	}
	
	public function atualizar($admin){
		include("conexao.php");
		$sql = 'UPDATE admin SET id = :id, email = :email, senha = :senha WHERE id = :id';
		$consulta = $conexao->prepare($sql);
		$consulta->bindValue(':id',$admin->getId()); 
		$consulta->bindValue(':email',$admin->getEmail()); 
		$consulta->bindValue(':senha',$admin->getSenha()); 
		if($consulta->execute())
			return true;
		else
			return false;
	}

	public function limparTabela(){
		include("conexao.php");
		$sql = 'DELETE FROM admin';
		$consulta = $conexao->prepare($sql);
		if($consulta->execute())
			return true;
		else
			return false;
	}
}
?>