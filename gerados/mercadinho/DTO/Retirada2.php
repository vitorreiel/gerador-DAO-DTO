<?php

	class Retirada2{
		private $id;
 		private $retirada_diaria;
 		private $retirada_mensal;
 		private $des;
 		private $dt;
 				
		public function getId(){
			return $this->id;
		}
		public function getRetirada_diaria(){
			return $this->retirada_diaria;
		}
		public function getRetirada_mensal(){
			return $this->retirada_mensal;
		}
		public function getDes(){
			return $this->des;
		}
		public function getDt(){
			return $this->dt;
		}
		
		public function setId($id){
			$this->id=$id;
		}
		public function setRetirada_diaria($retirada_diaria){
			$this->retirada_diaria=$retirada_diaria;
		}
		public function setRetirada_mensal($retirada_mensal){
			$this->retirada_mensal=$retirada_mensal;
		}
		public function setDes($des){
			$this->des=$des;
		}
		public function setDt($dt){
			$this->dt=$dt;
		}
		
	}
	
?>