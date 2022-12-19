<?php

class UserDAO{

	public function carregar($id){
		include("conexao.php");
		$sql = 'SELECT * FROM user WHERE id = :id';
		$consulta = $conexao->prepare($sql);
		$consulta->bindValue(":id",$id);
		$consulta->execute();
		return ($consulta->fetchAll(PDO::FETCH_ASSOC));
	}

	public function listarTodos(){
		include("conexao.php");
		$sql = 'SELECT * FROM user';
		$consulta = $conexao->prepare($sql);
		$consulta->execute();
		return ($consulta->fetchAll(PDO::FETCH_ASSOC));
	}
	
	public function listarTodosOrgenandoPor($coluna){
		include("conexao.php");
		$sql = 'SELECT * FROM user ORDER BY '.$coluna;
		$consulta = $conexao->prepare($sql);
		$consulta->execute();
		return ($consulta->fetchAll(PDO::FETCH_ASSOC));
	}
	
	public function deletar($id){
		include("conexao.php");
		$sql = 'DELETE FROM user WHERE id = :id';
		$consulta = $conexao->prepare($sql);
		$consulta->bindValue(":id",$id);
		if($consulta->execute())
			return true;
		else
			return false;
	}
	
	public function inserir($user){
		include("conexao.php");
		$sql = 'INSERT INTO user (id, login, senha, img) VALUES (:id, :login, :senha, :img)';
		$consulta = $conexao->prepare($sql);
		$consulta->bindValue(':id',$user->getId()); 
		$consulta->bindValue(':login',$user->getLogin()); 
		$consulta->bindValue(':senha',$user->getSenha()); 
		$consulta->bindValue(':img',$user->getImg()); 
		if($consulta->execute())
			return true;
		else
			return false;
	}
	
	public function atualizar($user){
		include("conexao.php");
		$sql = 'UPDATE user SET id = :id, login = :login, senha = :senha, img = :img WHERE id = :id';
		$consulta = $conexao->prepare($sql);
		$consulta->bindValue(':id',$user->getId()); 
		$consulta->bindValue(':login',$user->getLogin()); 
		$consulta->bindValue(':senha',$user->getSenha()); 
		$consulta->bindValue(':img',$user->getImg()); 
		if($consulta->execute())
			return true;
		else
			return false;
	}

	public function limparTabela(){
		include("conexao.php");
		$sql = 'DELETE FROM user';
		$consulta = $conexao->prepare($sql);
		if($consulta->execute())
			return true;
		else
			return false;
	}
}
?>