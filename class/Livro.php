<?php 

	abstract class Livro extends Produto{

		private $isbn;

		public function getIsbn(){
			return $this->isbn;
		}
		public function setIsbn($valor){
			$this->isbn = $valor;
		}

		public function calculaImposto(){
			//tive que usar o get porque a prop preço é private
			return $this->getPreco() * 0.065;
		}
	}

?>