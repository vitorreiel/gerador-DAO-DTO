<?php

	class Pedido{
		private $id;
 		private $foto;
 		private $data_pedido;
 		private $data_entrega;
 		private $valor;
 		private $descricao;
 				
		public function getId(){
			return $this->id;
		}
		public function getFoto(){
			return $this->foto;
		}
		public function getData_pedido(){
			return $this->data_pedido;
		}
		public function getData_entrega(){
			return $this->data_entrega;
		}
		public function getValor(){
			return $this->valor;
		}
		public function getDescricao(){
			return $this->descricao;
		}
		
		public function setId($id){
			$this->id=$id;
		}
		public function setFoto($foto){
			$this->foto=$foto;
		}
		public function setData_pedido($data_pedido){
			$this->data_pedido=$data_pedido;
		}
		public function setData_entrega($data_entrega){
			$this->data_entrega=$data_entrega;
		}
		public function setValor($valor){
			$this->valor=$valor;
		}
		public function setDescricao($descricao){
			$this->descricao=$descricao;
		}
		
	}
	
?>