<?php

	class Oficina_participante{
		//Atributos
		private $id;
 		private $id_participante;
 		private $id_oficina;
 		private $presenca;
 				
		//Métodos Getters e Setters
		public function getId(){
			return $this->id;
		}
		public function getId_participante(){
			return $this->id_participante;
		}
		public function getId_oficina(){
			return $this->id_oficina;
		}
		public function getPresenca(){
			return $this->presenca;
		}
		
		public function setId($id){
			$this->id=$id;
		}
		public function setId_participante($id_participante){
			$this->id_participante=$id_participante;
		}
		public function setId_oficina($id_oficina){
			$this->id_oficina=$id_oficina;
		}
		public function setPresenca($presenca){
			$this->presenca=$presenca;
		}
		
?>