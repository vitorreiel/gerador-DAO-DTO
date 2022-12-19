<?php

class EmpresaDAO{

	public function carregar($id){
		include("conexao.php");
		$sql = 'SELECT * FROM empresas WHERE id = :id';
		$consulta = $conexao->prepare($sql);
		$consulta->bindValue(":id",$id);
		$consulta->execute();
		return ($consulta->fetchAll(PDO::FETCH_ASSOC));
	}

	public function listarTodos(){
		include("conexao.php");
		$sql = 'SELECT * FROM empresas';
		$consulta = $conexao->prepare($sql);
		$consulta->execute();
		return ($consulta->fetchAll(PDO::FETCH_ASSOC));
	}
	
	public function listarTodosOrgenandoPor($coluna){
		include("conexao.php");
		$sql = 'SELECT * FROM empresas ORDER BY '.$coluna;
		$consulta = $conexao->prepare($sql);
		$consulta->execute();
		return ($consulta->fetchAll(PDO::FETCH_ASSOC));
	}
	
	public function deletar($id){
		include("conexao.php");
		$sql = 'DELETE FROM empresas WHERE id = :id';
		$consulta = $conexao->prepare($sql);
		$consulta->bindValue(":id",$id);
		if($consulta->execute())
			return true;
		else
			return false;
	}
	
	public function inserir($empresa){
		include("conexao.php");
		$sql = 'INSERT INTO empresas (id, produto, bolsa_familia, cras, creas, igd_suas, sas, total, dt, total_inicial) VALUES (:id, :produto, :bolsa_familia, :cras, :creas, :igd_suas, :sas, :total, :dt, :total_inicial)';
		$consulta = $conexao->prepare($sql);
		$consulta->bindValue(':id',$empresa->getId()); 









		if($consulta->execute())
			return true;
		else
			return false;
	}
	
	public function atualizar($empresa){
		include("conexao.php");
		$sql = 'UPDATE empresas SET id = :id, produto = :produto, bolsa_familia = :bolsa_familia, cras = :cras, creas = :creas, igd_suas = :igd_suas, sas = :sas, total = :total, dt = :dt, total_inicial = :total_inicial WHERE id = :id';
		$consulta = $conexao->prepare($sql);
		$consulta->bindValue(':id',$empresa->getId()); 









		if($consulta->execute())
			return true;
		else
			return false;
	}

	public function limparTabela(){
		include("conexao.php");
		$sql = 'DELETE FROM empresas';
		$consulta = $conexao->prepare($sql);
		if($consulta->execute())
			return true;
		else
			return false;
	}
}
?>