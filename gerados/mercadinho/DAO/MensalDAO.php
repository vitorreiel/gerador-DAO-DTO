<?php

class MensalDAO{

	public function carregar($id){
		include("conexao.php");
		$sql = 'SELECT * FROM mensal WHERE id = :id';
		$consulta = $conexao->prepare($sql);
		$consulta->bindValue(":id",$id);
		$consulta->execute();
		return ($consulta->fetchAll(PDO::FETCH_ASSOC));
	}

	public function listarTodos(){
		include("conexao.php");
		$sql = 'SELECT * FROM mensal';
		$consulta = $conexao->prepare($sql);
		$consulta->execute();
		return ($consulta->fetchAll(PDO::FETCH_ASSOC));
	}
	
	public function listarTodosOrgenandoPor($coluna){
		include("conexao.php");
		$sql = 'SELECT * FROM mensal ORDER BY '.$coluna;
		$consulta = $conexao->prepare($sql);
		$consulta->execute();
		return ($consulta->fetchAll(PDO::FETCH_ASSOC));
	}
	
	public function deletar($id){
		include("conexao.php");
		$sql = 'DELETE FROM mensal WHERE id = :id';
		$consulta = $conexao->prepare($sql);
		$consulta->bindValue(":id",$id);
		if($consulta->execute())
			return true;
		else
			return false;
	}
	
	public function inserir($mensal){
		include("conexao.php");
		$sql = 'INSERT INTO mensal (id, total_diario, total_mensal, retiradas, lucro, data) VALUES (:id, :total_diario, :total_mensal, :retiradas, :lucro, :data)';
		$consulta = $conexao->prepare($sql);
		$consulta->bindValue(':id',$mensal->getId()); 
		$consulta->bindValue(':total_diario',$mensal->getTotal_diario()); 
		$consulta->bindValue(':total_mensal',$mensal->getTotal_mensal()); 
		$consulta->bindValue(':retiradas',$mensal->getRetiradas()); 
		$consulta->bindValue(':lucro',$mensal->getLucro()); 
		$consulta->bindValue(':data',$mensal->getData()); 
		if($consulta->execute())
			return true;
		else
			return false;
	}
	
	public function atualizar($mensal){
		include("conexao.php");
		$sql = 'UPDATE mensal SET id = :id, total_diario = :total_diario, total_mensal = :total_mensal, retiradas = :retiradas, lucro = :lucro, data = :data WHERE id = :id';
		$consulta = $conexao->prepare($sql);
		$consulta->bindValue(':id',$mensal->getId()); 
		$consulta->bindValue(':total_diario',$mensal->getTotal_diario()); 
		$consulta->bindValue(':total_mensal',$mensal->getTotal_mensal()); 
		$consulta->bindValue(':retiradas',$mensal->getRetiradas()); 
		$consulta->bindValue(':lucro',$mensal->getLucro()); 
		$consulta->bindValue(':data',$mensal->getData()); 
		if($consulta->execute())
			return true;
		else
			return false;
	}

	public function limparTabela(){
		include("conexao.php");
		$sql = 'DELETE FROM mensal';
		$consulta = $conexao->prepare($sql);
		if($consulta->execute())
			return true;
		else
			return false;
	}
}
?>