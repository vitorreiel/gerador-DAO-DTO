<?php

	class Participante{
		//Atributos
		private $id;
 		private $nome;
 		private $email;
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
		public function setCpf($cpf){
			$this->cpf=$cpf;
		}
		
?>