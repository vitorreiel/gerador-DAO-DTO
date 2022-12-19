<?php

	class Cliente{
		private $id;
 		private $tel;
 		private $nome;
 		private $senha;
 		private $data_nasc;
 		private $email;
 				
		public function getId(){
			return $this->id;
		}
		public function getTel(){
			return $this->tel;
		}
		public function getNome(){
			return $this->nome;
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
		public function setTel($tel){
			$this->tel=$tel;
		}
		public function setNome($nome){
			$this->nome=$nome;
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