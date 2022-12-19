<?php

class AdmDAO{

	public function carregar($id){
		include("conexao.php");
		$sql = 'SELECT * FROM adm WHERE id = :id';
		$consulta = $conexao->prepare($sql);
		$consulta->bindValue(":id",$id);
		$consulta->execute();
		return ($consulta->fetchAll(PDO::FETCH_ASSOC));
	}

	public function listarTodos(){
		include("conexao.php");
		$sql = 'SELECT * FROM adm';
		$consulta = $conexao->prepare($sql);
		$consulta->execute();
		return ($consulta->fetchAll(PDO::FETCH_ASSOC));
	}
	
	public function listarTodosOrgenandoPor($coluna){
		include("conexao.php");
		$sql = 'SELECT * FROM adm ORDER BY '.$coluna;
		$consulta = $conexao->prepare($sql);
		$consulta->execute();
		return ($consulta->fetchAll(PDO::FETCH_ASSOC));
	}
	
	public function deletar($id){
		include("conexao.php");
		$sql = 'DELETE FROM adm WHERE id = :id';
		$consulta = $conexao->prepare($sql);
		$consulta->bindValue(":id",$id);
		if($consulta->execute())
			return true;
		else
			return false;
	}
	
	public function inserir($adm){
		include("conexao.php");
		$sql = 'INSERT INTO adm (id, login, senha) VALUES (:id, :login, :senha)';
		$consulta = $conexao->prepare($sql);
		$consulta->bindValue(':id',$adm->getId()); 
		$consulta->bindValue(':login',$adm->getLogin()); 
		$consulta->bindValue(':senha',$adm->getSenha()); 
		if($consulta->execute())
			return true;
		else
			return false;
	}
	
	public function atualizar($adm){
		include("conexao.php");
		$sql = 'UPDATE adm SET id = :id, login = :login, senha = :senha WHERE id = :id';
		$consulta = $conexao->prepare($sql);
		$consulta->bindValue(':id',$adm->getId()); 
		$consulta->bindValue(':login',$adm->getLogin()); 
		$consulta->bindValue(':senha',$adm->getSenha()); 
		if($consulta->execute())
			return true;
		else
			return false;
	}

	public function limparTabela(){
		include("conexao.php");
		$sql = 'DELETE FROM adm';
		$consulta = $conexao->prepare($sql);
		if($consulta->execute())
			return true;
		else
			return false;
	}
}
?>