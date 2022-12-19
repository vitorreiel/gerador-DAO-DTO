<?php

	class Retirada{
		private $id;
 		private $total_mensal;
 		private $total_diario;
 		private $retirada;
 		private $lucro;
 		private $dt;
 		private $des;
 		private $pago;
 		private $obs;
 				
		public function getId(){
			return $this->id;
		}
		public function getTotal_mensal(){
			return $this->total_mensal;
		}
		public function getTotal_diario(){
			return $this->total_diario;
		}
		public function getRetirada(){
			return $this->retirada;
		}
		public function getLucro(){
			return $this->lucro;
		}
		public function getDt(){
			return $this->dt;
		}
		public function getDes(){
			return $this->des;
		}
		public function getPago(){
			return $this->pago;
		}
		public function getObs(){
			return $this->obs;
		}
		
		public function setId($id){
			$this->id=$id;
		}
		public function setTotal_mensal($total_mensal){
			$this->total_mensal=$total_mensal;
		}
		public function setTotal_diario($total_diario){
			$this->total_diario=$total_diario;
		}
		public function setRetirada($retirada){
			$this->retirada=$retirada;
		}
		public function setLucro($lucro){
			$this->lucro=$lucro;
		}
		public function setDt($dt){
			$this->dt=$dt;
		}
		public function setDes($des){
			$this->des=$des;
		}
		public function setPago($pago){
			$this->pago=$pago;
		}
		public function setObs($obs){
			$this->obs=$obs;
		}
		
	}
	
?>