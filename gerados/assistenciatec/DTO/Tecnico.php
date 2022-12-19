<?php

	class Tecnico{
		private $id;
 		private $nome;
 		private $telefone;
 		private $sexo;
 		private $senha;
 		private $email;
 		private $data_nasc;
 		private $categoria;
 		private $cpf;
 		private $rg;
 				
		public function getId(){
			return $this->id;
		}
		public function getNome(){
			return $this->nome;
		}
		public function getTelefone(){
			return $this->telefone;
		}
		public function getSexo(){
			return $this->sexo;
		}
		public function getSenha(){
			return $this->senha;
		}
		public function getEmail(){
			return $this->email;
		}
		public function getData_nasc(){
			return $this->data_nasc;
		}
		public function getCategoria(){
			return $this->categoria;
		}
		public function getCpf(){
			return $this->cpf;
		}
		public function getRg(){
			return $this->rg;
		}
		
		public function setId($id){
			$this->id=$id;
		}
		public function setNome($nome){
			$this->nome=$nome;
		}
		public function setTelefone($telefone){
			$this->telefone=$telefone;
		}
		public function setSexo($sexo){
			$this->sexo=$sexo;
		}
		public function setSenha($senha){
			$this->senha=$senha;
		}
		public function setEmail($email){
			$this->email=$email;
		}
		public function setData_nasc($data_nasc){
			$this->data_nasc=$data_nasc;
		}
		public function setCategoria($categoria){
			$this->categoria=$categoria;
		}
		public function setCpf($cpf){
			$this->cpf=$cpf;
		}
		public function setRg($rg){
			$this->rg=$rg;
		}
		
	}
	
?>