<?php

	class Requisicao{
		private $id;
 		private $descricao;
 		private $status;
 		private $data;
 				
		public function getId(){
			return $this->id;
		}
		public function getDescricao(){
			return $this->descricao;
		}
		public function getStatus(){
			return $this->status;
		}
		public function getData(){
			return $this->data;
		}
		
		public function setId($id){
			$this->id=$id;
		}
		public function setDescricao($descricao){
			$this->descricao=$descricao;
		}
		public function setStatus($status){
			$this->status=$status;
		}
		public function setData($data){
			$this->data=$data;
		}
		
	}
	
?>