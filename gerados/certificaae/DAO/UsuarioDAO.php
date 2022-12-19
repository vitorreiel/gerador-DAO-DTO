<?php
	   
class UsuarioDAO{

	//Carrega um elemento pela chave primária
	public function carregar($id){
		$sql = 'SELECT * FROM usuario WHERE id = :id';
		$consulta = $conexao->prepare($sql);
		$consulta->bindValue(":id",$id);
		$resultado = $consulta->execute();
		return ($resultado->fetchAll(PDO::FETCH_ASSOC));
	}

	//Lista todos os elementos da tabela
	public function listarTodos(){
		$sql = 'SELECT * FROM usuario';
		$consulta = $conexao->prepare($sql);
		$resultado = $consulta->execute();
		return ($resultado->fetchAll(PDO::FETCH_ASSOC));
	}
	
	//Lista todos os elementos da tabela listando ordenados por uma coluna específica
	public function listarTodosOrgenandoPor($coluna){
		$sql = 'SELECT * FROM usuario ORDER BY '.$coluna;
		$consulta = $conexao->prepare($sql);
		$resultado = $consulta->execute();
		return ($resultado->fetchAll(PDO::FETCH_ASSOC));
	}
	
	//Apaga um elemento da tabela
	public function deletar($id){
		$sql = 'DELETE FROM usuario WHERE id = :id';
		$consulta = $conexao->prepare($sql);
		$consulta->bindValue(":id",$id);
		$consulta->execute();
	}
	
	//Insere um elemento na tabela
	public function inserir($usuario){
		$sql = 'INSERT INTO usuario (id, nome, email, login, senha, tipo) VALUES (:id, :nome, :email, :login, :senha, :tipo)';
		$consulta = $conexao->prepare($sql);
		$consulta->bindValue(':id',$usuario->getId()); 
		$consulta->bindValue(':nome',$usuario->getNome()); 
		$consulta->bindValue(':email',$usuario->getEmail()); 
		$consulta->bindValue(':login',$usuario->getLogin()); 
		$consulta->bindValue(':senha',$usuario->getSenha()); 
		$consulta->bindValue(':tipo',$usuario->getTipo()); 
		$consulta->execute();
	}
	
	//Atualiza um elemento na tabela
	public function atualizar($usuario){
		$sql = 'UPDATE usuario SET id = :id, nome = :nome, email = :email, login = :login, senha = :senha, tipo = :tipo WHERE id = :id';
		$consulta = $conexao->prepare($sql);
		$consulta->bindValue(':id',$usuario->getId()); 
		$consulta->bindValue(':nome',$usuario->getNome()); 
		$consulta->bindValue(':email',$usuario->getEmail()); 
		$consulta->bindValue(':login',$usuario->getLogin()); 
		$consulta->bindValue(':senha',$usuario->getSenha()); 
		$consulta->bindValue(':tipo',$usuario->getTipo()); 
		$consulta->execute();
	}

	//Apaga todos os elementos da tabela
	public function limparTabela(){
		$sql = 'DELETE FROM usuario';
		$consulta = $conexao->prepare($sql);
		$consulta->execute();
	}
?>