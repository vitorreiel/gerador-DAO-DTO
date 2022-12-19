<?php

	class Evento{
		//Atributos
		private $nome;
 		private $id;
 		private $local;
 		private $data;
 		private $duracao;
 				
		//Métodos Getters e Setters
		public function getNome(){
			return $this->nome;
		}
		public function getId(){
			return $this->id;
		}
		public function getLocal(){
			return $this->local;
		}
		public function getData(){
			return $this->data;
		}
		public function getDuracao(){
			return $this->duracao;
		}
		
		public function setNome($nome){
			$this->nome=$nome;
		}
		public function setId($id){
			$this->id=$id;
		}
		public function setLocal($local){
			$this->local=$local;
		}
		public function setData($data){
			$this->data=$data;
		}
		public function setDuracao($duracao){
			$this->duracao=$duracao;
		}
		
?>