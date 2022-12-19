<?php

	class Empresa{
		private $id;
 		private $nome;
 		private $rodape;
 		private $cabecalho;
 		private $cnpj;
 		private $foto;
 		private $frase;
 		private $redeSocial;
 				
		public function getId(){
			return $this->id;
		}
		public function getNome(){
			return $this->nome;
		}
		public function getRodape(){
			return $this->rodape;
		}
		public function getCabecalho(){
			return $this->cabecalho;
		}
		public function getCnpj(){
			return $this->cnpj;
		}
		public function getFoto(){
			return $this->foto;
		}
		public function getFrase(){
			return $this->frase;
		}
		public function getRedeSocial(){
			return $this->redeSocial;
		}
		
		public function setId($id){
			$this->id=$id;
		}
		public function setNome($nome){
			$this->nome=$nome;
		}
		public function setRodape($rodape){
			$this->rodape=$rodape;
		}
		public function setCabecalho($cabecalho){
			$this->cabecalho=$cabecalho;
		}
		public function setCnpj($cnpj){
			$this->cnpj=$cnpj;
		}
		public function setFoto($foto){
			$this->foto=$foto;
		}
		public function setFrase($frase){
			$this->frase=$frase;
		}
		public function setRedeSocial($redeSocial){
			$this->redeSocial=$redeSocial;
		}
		
	}
	
?>