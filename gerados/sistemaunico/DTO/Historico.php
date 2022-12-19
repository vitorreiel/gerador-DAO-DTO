<?php

	class Historico{
		private $id;
 		private $emissor;
 		private $data_h;
 		private $produto;
 		private $valor_entregue;
 		private $valor_restante;
 				
		public function getId(){
			return $this->id;
		}
		public function getEmissor(){
			return $this->emissor;
		}
		public function getData_h(){
			return $this->data_h;
		}
		public function getProduto(){
			return $this->produto;
		}
		public function getValor_entregue(){
			return $this->valor_entregue;
		}
		public function getValor_restante(){
			return $this->valor_restante;
		}
		
		public function setId($id){
			$this->id=$id;
		}
		public function setEmissor($emissor){
			$this->emissor=$emissor;
		}
		public function setData_h($data_h){
			$this->data_h=$data_h;
		}
		public function setProduto($produto){
			$this->produto=$produto;
		}
		public function setValor_entregue($valor_entregue){
			$this->valor_entregue=$valor_entregue;
		}
		public function setValor_restante($valor_restante){
			$this->valor_restante=$valor_restante;
		}
		
	}
	
?>