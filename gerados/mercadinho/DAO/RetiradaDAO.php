<?php

class RetiradaDAO{

	public function carregar($id){
		include("conexao.php");
		$sql = 'SELECT * FROM retirada WHERE id = :id';
		$consulta = $conexao->prepare($sql);
		$consulta->bindValue(":id",$id);
		$consulta->execute();
		return ($consulta->fetchAll(PDO::FETCH_ASSOC));
	}

	public function listarTodos(){
		include("conexao.php");
		$sql = 'SELECT * FROM retirada';
		$consulta = $conexao->prepare($sql);
		$consulta->execute();
		return ($consulta->fetchAll(PDO::FETCH_ASSOC));
	}
	
	public function listarTodosOrgenandoPor($coluna){
		include("conexao.php");
		$sql = 'SELECT * FROM retirada ORDER BY '.$coluna;
		$consulta = $conexao->prepare($sql);
		$consulta->execute();
		return ($consulta->fetchAll(PDO::FETCH_ASSOC));
	}
	
	public function deletar($id){
		include("conexao.php");
		$sql = 'DELETE FROM retirada WHERE id = :id';
		$consulta = $conexao->prepare($sql);
		$consulta->bindValue(":id",$id);
		if($consulta->execute())
			return true;
		else
			return false;
	}
	
	public function inserir($retirada){
		include("conexao.php");
		$sql = 'INSERT INTO retirada (id, total_mensal, total_diario, retirada, lucro, dt, des, pago, obs) VALUES (:id, :total_mensal, :total_diario, :retirada, :lucro, :dt, :des, :pago, :obs)';
		$consulta = $conexao->prepare($sql);
		$consulta->bindValue(':id',$retirada->getId()); 
		$consulta->bindValue(':total_mensal',$retirada->getTotal_mensal()); 
		$consulta->bindValue(':total_diario',$retirada->getTotal_diario()); 
		$consulta->bindValue(':retirada',$retirada->getRetirada()); 
		$consulta->bindValue(':lucro',$retirada->getLucro()); 
		$consulta->bindValue(':dt',$retirada->getDt()); 
		$consulta->bindValue(':des',$retirada->getDes()); 
		$consulta->bindValue(':pago',$retirada->getPago()); 
		$consulta->bindValue(':obs',$retirada->getObs()); 
		if($consulta->execute())
			return true;
		else
			return false;
	}
	
	public function atualizar($retirada){
		include("conexao.php");
		$sql = 'UPDATE retirada SET id = :id, total_mensal = :total_mensal, total_diario = :total_diario, retirada = :retirada, lucro = :lucro, dt = :dt, des = :des, pago = :pago, obs = :obs WHERE id = :id';
		$consulta = $conexao->prepare($sql);
		$consulta->bindValue(':id',$retirada->getId()); 
		$consulta->bindValue(':total_mensal',$retirada->getTotal_mensal()); 
		$consulta->bindValue(':total_diario',$retirada->getTotal_diario()); 
		$consulta->bindValue(':retirada',$retirada->getRetirada()); 
		$consulta->bindValue(':lucro',$retirada->getLucro()); 
		$consulta->bindValue(':dt',$retirada->getDt()); 
		$consulta->bindValue(':des',$retirada->getDes()); 
		$consulta->bindValue(':pago',$retirada->getPago()); 
		$consulta->bindValue(':obs',$retirada->getObs()); 
		if($consulta->execute())
			return true;
		else
			return false;
	}

	public function limparTabela(){
		include("conexao.php");
		$sql = 'DELETE FROM retirada';
		$consulta = $conexao->prepare($sql);
		if($consulta->execute())
			return true;
		else
			return false;
	}
}
?>