<?php 
	class Aluno{
		//decarando variaveis//
		private $nome;
		private $dataNasc;
		private $foto;

		//construtor//
		public function __construct($nome, $dataNasc, $foto){
			$this->setNome($nome);
			$this->setDataNasc($dataNasc);
			$this->setFoto($foto);
		}
		//pega e entrega NOME//
		public function setNome(){
			$this->nome= $nome;
		}
		public function getNome(){
			return $this->nome;
		}
		//pega e entrega DATA NASCIMENTO//
		public function setDataNasc(){
			$data = explode('/',$dataNasc);
			$data->data= "$data[2]-$data[1]-$data[0]";			
		}
		public function getDataNasc(){
			return $this->dataNasc;
		}
		//pega e entrega FOTO//
		public function setFoto(){
			$this->foto= $foto;
		}
		public function getFoto(){
			return $this->foto;
		}
	}

?>
