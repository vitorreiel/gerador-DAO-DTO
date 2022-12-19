<?php
	   
class Oficina_palestranteDAO{

	//Carrega um elemento pela chave primária
	public function carregar($id){
		$sql = 'SELECT * FROM oficina_palestrante WHERE id = :id';
		$consulta = $conexao->prepare($sql);
		$consulta->bindValue(":id",$id);
		$resultado = $consulta->execute();
		return ($resultado->fetchAll(PDO::FETCH_ASSOC));
	}

	//Lista todos os elementos da tabela
	public function listarTodos(){
		$sql = 'SELECT * FROM oficina_palestrante';
		$consulta = $conexao->prepare($sql);
		$resultado = $consulta->execute();
		return ($resultado->fetchAll(PDO::FETCH_ASSOC));
	}
	
	//Lista todos os elementos da tabela listando ordenados por uma coluna específica
	public function listarTodosOrgenandoPor($coluna){
		$sql = 'SELECT * FROM oficina_palestrante ORDER BY '.$coluna;
		$consulta = $conexao->prepare($sql);
		$resultado = $consulta->execute();
		return ($resultado->fetchAll(PDO::FETCH_ASSOC));
	}
	
	//Apaga um elemento da tabela
	public function deletar($id){
		$sql = 'DELETE FROM oficina_palestrante WHERE id = :id';
		$consulta = $conexao->prepare($sql);
		$consulta->bindValue(":id",$id);
		$consulta->execute();
	}
	
	//Insere um elemento na tabela
	public function inserir($oficina_palestrante){
		$sql = 'INSERT INTO oficina_palestrante (id, id_palestrante, id_oficina) VALUES (:id, :id_palestrante, :id_oficina)';
		$consulta = $conexao->prepare($sql);
		$consulta->bindValue(':id',$oficina_palestrante->getId()); 
		$consulta->bindValue(':id_palestrante',$oficina_palestrante->getId_palestrante()); 
		$consulta->bindValue(':id_oficina',$oficina_palestrante->getId_oficina()); 
		$consulta->execute();
	}
	
	//Atualiza um elemento na tabela
	public function atualizar($oficina_palestrante){
		$sql = 'UPDATE oficina_palestrante SET id = :id, id_palestrante = :id_palestrante, id_oficina = :id_oficina WHERE id = :id';
		$consulta = $conexao->prepare($sql);
		$consulta->bindValue(':id',$oficina_palestrante->getId()); 
		$consulta->bindValue(':id_palestrante',$oficina_palestrante->getId_palestrante()); 
		$consulta->bindValue(':id_oficina',$oficina_palestrante->getId_oficina()); 
		$consulta->execute();
	}

	//Apaga todos os elementos da tabela
	public function limparTabela(){
		$sql = 'DELETE FROM oficina_palestrante';
		$consulta = $conexao->prepare($sql);
		$consulta->execute();
	}
?>