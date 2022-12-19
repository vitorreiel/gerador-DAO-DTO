<?php

	class Mensal{
		private $id;
 		private $total_diario;
 		private $total_mensal;
 		private $retiradas;
 		private $lucro;
 		private $data;
 				
		public function getId(){
			return $this->id;
		}
		public function getTotal_diario(){
			return $this->total_diario;
		}
		public function getTotal_mensal(){
			return $this->total_mensal;
		}
		public function getRetiradas(){
			return $this->retiradas;
		}
		public function getLucro(){
			return $this->lucro;
		}
		public function getData(){
			return $this->data;
		}
		
		public function setId($id){
			$this->id=$id;
		}
		public function setTotal_diario($total_diario){
			$this->total_diario=$total_diario;
		}
		public function setTotal_mensal($total_mensal){
			$this->total_mensal=$total_mensal;
		}
		public function setRetiradas($retiradas){
			$this->retiradas=$retiradas;
		}
		public function setLucro($lucro){
			$this->lucro=$lucro;
		}
		public function setData($data){
			$this->data=$data;
		}
		
	}
	
?>