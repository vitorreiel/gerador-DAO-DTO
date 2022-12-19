<?php

	class Empresa{
		private $id;
 		private $produto;
 		private $bolsa_familia;
 		private $cras;
 		private $creas;
 		private $igd_suas;
 		private $sas;
 		private $total;
 		private $dt;
 		private $total_inicial;
 				
		public function getId(){
			return $this->id;
		}
		public function getProduto(){
			return $this->produto;
		}
		public function getBolsa_familia(){
			return $this->bolsa_familia;
		}
		public function getCras(){
			return $this->cras;
		}
		public function getCreas(){
			return $this->creas;
		}
		public function getIgd_suas(){
			return $this->igd_suas;
		}
		public function getSas(){
			return $this->sas;
		}
		public function getTotal(){
			return $this->total;
		}
		public function getDt(){
			return $this->dt;
		}
		public function getTotal_inicial(){
			return $this->total_inicial;
		}
		
		public function setId($id){
			$this->id=$id;
		}
		public function setProduto($produto){
			$this->produto=$produto;
		}
		public function setBolsa_familia($bolsa_familia){
			$this->bolsa_familia=$bolsa_familia;
		}
		public function setCras($cras){
			$this->cras=$cras;
		}
		public function setCreas($creas){
			$this->creas=$creas;
		}
		public function setIgd_suas($igd_suas){
			$this->igd_suas=$igd_suas;
		}
		public function setSas($sas){
			$this->sas=$sas;
		}
		public function setTotal($total){
			$this->total=$total;
		}
		public function setDt($dt){
			$this->dt=$dt;
		}
		public function setTotal_inicial($total_inicial){
			$this->total_inicial=$total_inicial;
		}
		
	}
	
?>