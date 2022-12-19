<?php

class ClienteDAO{

	public function carregar($id){
		include("conexao.php");
		$sql = 'SELECT * FROM cliente WHERE id = :id';
		$consulta = $conexao->prepare($sql);
		$consulta->bindValue(":id",$id);
		$consulta->execute();
		return ($consulta->fetchAll(PDO::FETCH_ASSOC));
	}

	public function listarTodos(){
		include("conexao.php");
		$sql = 'SELECT * FROM cliente';
		$consulta = $conexao->prepare($sql);
		$consulta->execute();
		return ($consulta->fetchAll(PDO::FETCH_ASSOC));
	}
	
	public function listarTodosOrgenandoPor($coluna){
		include("conexao.php");
		$sql = 'SELECT * FROM cliente ORDER BY '.$coluna;
		$consulta = $conexao->prepare($sql);
		$consulta->execute();
		return ($consulta->fetchAll(PDO::FETCH_ASSOC));
	}
	
	public function deletar($id){
		include("conexao.php");
		$sql = 'DELETE FROM cliente WHERE id = :id';
		$consulta = $conexao->prepare($sql);
		$consulta->bindValue(":id",$id);
		if($consulta->execute())
			return true;
		else
			return false;
	}
	
	public function inserir($cliente){
		include("conexao.php");
		$sql = 'INSERT INTO cliente (id, nome, apelido, cidade, endereco, bairro, num, rg, cpf, mae, dt_nasc, tel1, tel2, obs1, obs2, img) VALUES (:id, :nome, :apelido, :cidade, :endereco, :bairro, :num, :rg, :cpf, :mae, :dt_nasc, :tel1, :tel2, :obs1, :obs2, :img)';
		$consulta = $conexao->prepare($sql);
		$consulta->bindValue(':id',$cliente->getId()); 















		if($consulta->execute())
			return true;
		else
			return false;
	}
	
	public function atualizar($cliente){
		include("conexao.php");
		$sql = 'UPDATE cliente SET id = :id, nome = :nome, apelido = :apelido, cidade = :cidade, endereco = :endereco, bairro = :bairro, num = :num, rg = :rg, cpf = :cpf, mae = :mae, dt_nasc = :dt_nasc, tel1 = :tel1, tel2 = :tel2, obs1 = :obs1, obs2 = :obs2, img = :img WHERE id = :id';
		$consulta = $conexao->prepare($sql);
		$consulta->bindValue(':id',$cliente->getId()); 















		if($consulta->execute())
			return true;
		else
			return false;
	}

	public function limparTabela(){
		include("conexao.php");
		$sql = 'DELETE FROM cliente';
		$consulta = $conexao->prepare($sql);
		if($consulta->execute())
			return true;
		else
			return false;
	}
}
?>