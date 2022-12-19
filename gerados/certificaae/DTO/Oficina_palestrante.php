<?php

	class Oficina_palestrante{
		//Atributos
		private $id;
 		private $id_palestrante;
 		private $id_oficina;
 				
		//Métodos Getters e Setters
		public function getId(){
			return $this->id;
		}
		public function getId_palestrante(){
			return $this->id_palestrante;
		}
		public function getId_oficina(){
			return $this->id_oficina;
		}
		
		public function setId($id){
			$this->id=$id;
		}
		public function setId_palestrante($id_palestrante){
			$this->id_palestrante=$id_palestrante;
		}
		public function setId_oficina($id_oficina){
			$this->id_oficina=$id_oficina;
		}
		
?>