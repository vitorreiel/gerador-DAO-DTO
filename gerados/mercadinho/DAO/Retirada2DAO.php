<?php

class Retirada2DAO{

	public function carregar($id){
		include("conexao.php");
		$sql = 'SELECT * FROM retirada2 WHERE id = :id';
		$consulta = $conexao->prepare($sql);
		$consulta->bindValue(":id",$id);
		$consulta->execute();
		return ($consulta->fetchAll(PDO::FETCH_ASSOC));
	}

	public function listarTodos(){
		include("conexao.php");
		$sql = 'SELECT * FROM retirada2';
		$consulta = $conexao->prepare($sql);
		$consulta->execute();
		return ($consulta->fetchAll(PDO::FETCH_ASSOC));
	}
	
	public function listarTodosOrgenandoPor($coluna){
		include("conexao.php");
		$sql = 'SELECT * FROM retirada2 ORDER BY '.$coluna;
		$consulta = $conexao->prepare($sql);
		$consulta->execute();
		return ($consulta->fetchAll(PDO::FETCH_ASSOC));
	}
	
	public function deletar($id){
		include("conexao.php");
		$sql = 'DELETE FROM retirada2 WHERE id = :id';
		$consulta = $conexao->prepare($sql);
		$consulta->bindValue(":id",$id);
		if($consulta->execute())
			return true;
		else
			return false;
	}
	
	public function inserir($retirada2){
		include("conexao.php");
		$sql = 'INSERT INTO retirada2 (id, retirada_diaria, retirada_mensal, des, dt) VALUES (:id, :retirada_diaria, :retirada_mensal, :des, :dt)';
		$consulta = $conexao->prepare($sql);
		$consulta->bindValue(':id',$retirada2->getId()); 
		$consulta->bindValue(':retirada_diaria',$retirada2->getRetirada_diaria()); 
		$consulta->bindValue(':retirada_mensal',$retirada2->getRetirada_mensal()); 
		$consulta->bindValue(':des',$retirada2->getDes()); 
		$consulta->bindValue(':dt',$retirada2->getDt()); 
		if($consulta->execute())
			return true;
		else
			return false;
	}
	
	public function atualizar($retirada2){
		include("conexao.php");
		$sql = 'UPDATE retirada2 SET id = :id, retirada_diaria = :retirada_diaria, retirada_mensal = :retirada_mensal, des = :des, dt = :dt WHERE id = :id';
		$consulta = $conexao->prepare($sql);
		$consulta->bindValue(':id',$retirada2->getId()); 
		$consulta->bindValue(':retirada_diaria',$retirada2->getRetirada_diaria()); 
		$consulta->bindValue(':retirada_mensal',$retirada2->getRetirada_mensal()); 
		$consulta->bindValue(':des',$retirada2->getDes()); 
		$consulta->bindValue(':dt',$retirada2->getDt()); 
		if($consulta->execute())
			return true;
		else
			return false;
	}

	public function limparTabela(){
		include("conexao.php");
		$sql = 'DELETE FROM retirada2';
		$consulta = $conexao->prepare($sql);
		if($consulta->execute())
			return true;
		else
			return false;
	}
}
?>