<?php

	class Evento{
		//Atributos
		private $id;
 		private $titulo;
 		private $cor;
 		private $inicio;
 		private $fim;
 		private $descricao;
 				
		//Métodos Getters e Setters
		public function getId(){
			return $this->id;
		}
		public function getTitulo(){
			return $this->titulo;
		}
		public function getCor(){
			return $this->cor;
		}
		public function getInicio(){
			return $this->inicio;
		}
		public function getFim(){
			return $this->fim;
		}
		public function getDescricao(){
			return $this->descricao;
		}
		
		public function setId($id){
			$this->id=$id;
		}
		public function setTitulo($titulo){
			$this->titulo=$titulo;
		}
		public function setCor($cor){
			$this->cor=$cor;
		}
		public function setInicio($inicio){
			$this->inicio=$inicio;
		}
		public function setFim($fim){
			$this->fim=$fim;
		}
		public function setDescricao($descricao){
			$this->descricao=$descricao;
		}
		
	}
?>