<?php

	class Oficina{
		//Atributos
		private $id;
 		private $nome;
 		private $data;
 		private $carga_horaria;
 		private $horario;
 		private $id_evento;
 		private $tipo;
 		private $vagas;
 				
		//Métodos Getters e Setters
		public function getId(){
			return $this->id;
		}
		public function getNome(){
			return $this->nome;
		}
		public function getData(){
			return $this->data;
		}
		public function getCarga_horaria(){
			return $this->carga_horaria;
		}
		public function getHorario(){
			return $this->horario;
		}
		public function getId_evento(){
			return $this->id_evento;
		}
		public function getTipo(){
			return $this->tipo;
		}
		public function getVagas(){
			return $this->vagas;
		}
		
		public function setId($id){
			$this->id=$id;
		}
		public function setNome($nome){
			$this->nome=$nome;
		}
		public function setData($data){
			$this->data=$data;
		}
		public function setCarga_horaria($carga_horaria){
			$this->carga_horaria=$carga_horaria;
		}
		public function setHorario($horario){
			$this->horario=$horario;
		}
		public function setId_evento($id_evento){
			$this->id_evento=$id_evento;
		}
		public function setTipo($tipo){
			$this->tipo=$tipo;
		}
		public function setVagas($vagas){
			$this->vagas=$vagas;
		}
		
?>