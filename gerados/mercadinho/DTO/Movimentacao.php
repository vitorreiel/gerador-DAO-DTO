<?php

	class Movimentacao{
		private $id;
 		private $id_cliente;
 		private $dt;
 		private $valor_entregue;
 		private $valor_prod;
 		private $des;
 		private $obs;
 				
		public function getId(){
			return $this->id;
		}
		public function getId_cliente(){
			return $this->id_cliente;
		}
		public function getDt(){
			return $this->dt;
		}
		public function getValor_entregue(){
			return $this->valor_entregue;
		}
		public function getValor_prod(){
			return $this->valor_prod;
		}
		public function getDes(){
			return $this->des;
		}
		public function getObs(){
			return $this->obs;
		}
		
		public function setId($id){
			$this->id=$id;
		}
		public function setId_cliente($id_cliente){
			$this->id_cliente=$id_cliente;
		}
		public function setDt($dt){
			$this->dt=$dt;
		}
		public function setValor_entregue($valor_entregue){
			$this->valor_entregue=$valor_entregue;
		}
		public function setValor_prod($valor_prod){
			$this->valor_prod=$valor_prod;
		}
		public function setDes($des){
			$this->des=$des;
		}
		public function setObs($obs){
			$this->obs=$obs;
		}
		
	}
	
?>