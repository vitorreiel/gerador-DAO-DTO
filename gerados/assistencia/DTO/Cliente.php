<?php

	class Cliente{
		private $id;
 		private $telefone;
 		private $nome;
 		private $sexo;
 		private $senha;
 		private $data_nasc;
 		private $email;
 				
		public function getId(){
			return $this->id;
		}
		public function getTelefone(){
			return $this->telefone;
		}
		public function getNome(){
			return $this->nome;
		}
		public function getSexo(){
			return $this->sexo;
		}
		public function getSenha(){
			return $this->senha;
		}
		public function getData_nasc(){
			return $this->data_nasc;
		}
		public function getEmail(){
			return $this->email;
		}
		
		public function setId($id){
			$this->id=$id;
		}
		public function setTelefone($telefone){
			$this->telefone=$telefone;
		}
		public function setNome($nome){
			$this->nome=$nome;
		}
		public function setSexo($sexo){
			$this->sexo=$sexo;
		}
		public function setSenha($senha){
			$this->senha=$senha;
		}
		public function setData_nasc($data_nasc){
			$this->data_nasc=$data_nasc;
		}
		public function setEmail($email){
			$this->email=$email;
		}
		
	}
	
?>