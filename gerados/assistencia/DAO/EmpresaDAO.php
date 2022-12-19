<?php

class EmpresaDAO{

	public function carregar($id){
		include("conexao.php");
		$sql = 'SELECT * FROM empresa WHERE id = :id';
		$consulta = $conexao->prepare($sql);
		$consulta->bindValue(":id",$id);
		$consulta->execute();
		return ($consulta->fetchAll(PDO::FETCH_ASSOC));
	}

	public function listarTodos(){
		include("conexao.php");
		$sql = 'SELECT * FROM empresa';
		$consulta = $conexao->prepare($sql);
		$consulta->execute();
		return ($consulta->fetchAll(PDO::FETCH_ASSOC));
	}
	
	public function listarTodosOrgenandoPor($coluna){
		include("conexao.php");
		$sql = 'SELECT * FROM empresa ORDER BY '.$coluna;
		$consulta = $conexao->prepare($sql);
		$consulta->execute();
		return ($consulta->fetchAll(PDO::FETCH_ASSOC));
	}
	
	public function deletar($id){
		include("conexao.php");
		$sql = 'DELETE FROM empresa WHERE id = :id';
		$consulta = $conexao->prepare($sql);
		$consulta->bindValue(":id",$id);
		if($consulta->execute())
			return true;
		else
			return false;
	}
	
	public function inserir($empresa){
		include("conexao.php");
		$sql = 'INSERT INTO empresa (id, nome, rodape, cabecalho, cnpj, foto, frase, redeSocial) VALUES (:id, :nome, :rodape, :cabecalho, :cnpj, :foto, :frase, :redeSocial)';
		$consulta = $conexao->prepare($sql);
		$consulta->bindValue(':id',$empresa->getId()); 
		$consulta->bindValue(':nome',$empresa->getNome()); 
		$consulta->bindValue(':rodape',$empresa->getRodape()); 
		$consulta->bindValue(':cabecalho',$empresa->getCabecalho()); 
		$consulta->bindValue(':cnpj',$empresa->getCnpj()); 
		$consulta->bindValue(':foto',$empresa->getFoto()); 
		$consulta->bindValue(':frase',$empresa->getFrase()); 
		$consulta->bindValue(':redeSocial',$empresa->getRedeSocial()); 
		if($consulta->execute())
			return true;
		else
			return false;
	}
	
	public function atualizar($empresa){
		include("conexao.php");
		$sql = 'UPDATE empresa SET id = :id, nome = :nome, rodape = :rodape, cabecalho = :cabecalho, cnpj = :cnpj, foto = :foto, frase = :frase, redeSocial = :redeSocial WHERE id = :id';
		$consulta = $conexao->prepare($sql);
		$consulta->bindValue(':id',$empresa->getId()); 
		$consulta->bindValue(':nome',$empresa->getNome()); 
		$consulta->bindValue(':rodape',$empresa->getRodape()); 
		$consulta->bindValue(':cabecalho',$empresa->getCabecalho()); 
		$consulta->bindValue(':cnpj',$empresa->getCnpj()); 
		$consulta->bindValue(':foto',$empresa->getFoto()); 
		$consulta->bindValue(':frase',$empresa->getFrase()); 
		$consulta->bindValue(':redeSocial',$empresa->getRedeSocial()); 
		if($consulta->execute())
			return true;
		else
			return false;
	}

	public function limparTabela(){
		include("conexao.php");
		$sql = 'DELETE FROM empresa';
		$consulta = $conexao->prepare($sql);
		if($consulta->execute())
			return true;
		else
			return false;
	}
}
?>