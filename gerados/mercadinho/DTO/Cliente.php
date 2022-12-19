<?php

	class Cliente{
		private $id;
 		private $nome;
 		private $apelido;
 		private $cidade;
 		private $endereco;
 		private $bairro;
 		private $num;
 		private $rg;
 		private $cpf;
 		private $mae;
 		private $dt_nasc;
 		private $tel1;
 		private $tel2;
 		private $obs1;
 		private $obs2;
 		private $img;
 				
		public function getId(){
			return $this->id;
		}
		public function getNome(){
			return $this->nome;
		}
		public function getApelido(){
			return $this->apelido;
		}
		public function getCidade(){
			return $this->cidade;
		}
		public function getEndereco(){
			return $this->endereco;
		}
		public function getBairro(){
			return $this->bairro;
		}
		public function getNum(){
			return $this->num;
		}
		public function getRg(){
			return $this->rg;
		}
		public function getCpf(){
			return $this->cpf;
		}
		public function getMae(){
			return $this->mae;
		}
		public function getDt_nasc(){
			return $this->dt_nasc;
		}
		public function getTel1(){
			return $this->tel1;
		}
		public function getTel2(){
			return $this->tel2;
		}
		public function getObs1(){
			return $this->obs1;
		}
		public function getObs2(){
			return $this->obs2;
		}
		public function getImg(){
			return $this->img;
		}
		
		public function setId($id){
			$this->id=$id;
		}
		public function setNome($nome){
			$this->nome=$nome;
		}
		public function setApelido($apelido){
			$this->apelido=$apelido;
		}
		public function setCidade($cidade){
			$this->cidade=$cidade;
		}
		public function setEndereco($endereco){
			$this->endereco=$endereco;
		}
		public function setBairro($bairro){
			$this->bairro=$bairro;
		}
		public function setNum($num){
			$this->num=$num;
		}
		public function setRg($rg){
			$this->rg=$rg;
		}
		public function setCpf($cpf){
			$this->cpf=$cpf;
		}
		public function setMae($mae){
			$this->mae=$mae;
		}
		public function setDt_nasc($dt_nasc){
			$this->dt_nasc=$dt_nasc;
		}
		public function setTel1($tel1){
			$this->tel1=$tel1;
		}
		public function setTel2($tel2){
			$this->tel2=$tel2;
		}
		public function setObs1($obs1){
			$this->obs1=$obs1;
		}
		public function setObs2($obs2){
			$this->obs2=$obs2;
		}
		public function setImg($img){
			$this->img=$img;
		}
		
	}
	
?>