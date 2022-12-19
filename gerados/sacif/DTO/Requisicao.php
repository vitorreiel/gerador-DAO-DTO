<?php

	class Requisicao{
		private $id;
 		private $data;
 		private $status;
 				
		public function getId(){
			return $this->id;
		}
		public function getData(){
			return $this->data;
		}
		public function getStatus(){
			return $this->status;
		}
		
		public function setId($id){
			$this->id=$id;
		}
		public function setData($data){
			$this->data=$data;
		}
		public function setStatus($status){
			$this->status=$status;
		}
		
	}
	
?>