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
		$consulta->bindValue(':nome',$cliente->getNome()); 
		$consulta->bindValue(':apelido',$cliente->getApelido()); 
		$consulta->bindValue(':cidade',$cliente->getCidade()); 
		$consulta->bindValue(':endereco',$cliente->getEndereco()); 
		$consulta->bindValue(':bairro',$cliente->getBairro()); 
		$consulta->bindValue(':num',$cliente->getNum()); 
		$consulta->bindValue(':rg',$cliente->getRg()); 
		$consulta->bindValue(':cpf',$cliente->getCpf()); 
		$consulta->bindValue(':mae',$cliente->getMae()); 
		$consulta->bindValue(':dt_nasc',$cliente->getDt_nasc()); 
		$consulta->bindValue(':tel1',$cliente->getTel1()); 
		$consulta->bindValue(':tel2',$cliente->getTel2()); 
		$consulta->bindValue(':obs1',$cliente->getObs1()); 
		$consulta->bindValue(':obs2',$cliente->getObs2()); 
		$consulta->bindValue(':img',$cliente->getImg()); 
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
		$consulta->bindValue(':nome',$cliente->getNome()); 
		$consulta->bindValue(':apelido',$cliente->getApelido()); 
		$consulta->bindValue(':cidade',$cliente->getCidade()); 
		$consulta->bindValue(':endereco',$cliente->getEndereco()); 
		$consulta->bindValue(':bairro',$cliente->getBairro()); 
		$consulta->bindValue(':num',$cliente->getNum()); 
		$consulta->bindValue(':rg',$cliente->getRg()); 
		$consulta->bindValue(':cpf',$cliente->getCpf()); 
		$consulta->bindValue(':mae',$cliente->getMae()); 
		$consulta->bindValue(':dt_nasc',$cliente->getDt_nasc()); 
		$consulta->bindValue(':tel1',$cliente->getTel1()); 
		$consulta->bindValue(':tel2',$cliente->getTel2()); 
		$consulta->bindValue(':obs1',$cliente->getObs1()); 
		$consulta->bindValue(':obs2',$cliente->getObs2()); 
		$consulta->bindValue(':img',$cliente->getImg()); 
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