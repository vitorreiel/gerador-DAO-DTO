<?php
	   
	class Palestrante{
		//Atributos
		private $id;
 		private $nome;
 		private $email;
 		private $cargo;
 		private $imagem_assinatura;
 		private $cpf;
 				
		//Métodos Getters e Setters
		public function getId(){
			return $this->id;
		}
		public function getNome(){
			return $this->nome;
		}
		public function getEmail(){
			return $this->email;
		}
		public function getCargo(){
			return $this->cargo;
		}
		public function getImagem_assinatura(){
			return $this->imagem_assinatura;
		}
		public function getCpf(){
			return $this->cpf;
		}
		
		public function setId($id){
			$this->id=$id;
		}
		public function setNome($nome){
			$this->nome=$nome;
		}
		public function setEmail($email){
			$this->email=$email;
		}
		public function setCargo($cargo){
			$this->cargo=$cargo;
		}
		public function setImagem_assinatura($imagem_assinatura){
			$this->imagem_assinatura=$imagem_assinatura;
		}
		public function setCpf($cpf){
			$this->cpf=$cpf;
		}
		
?>