<?php 

class Livro extends Produto{

	private $isbn;


	public function getIsbn(){
		return $this->isbn;
	}
	public function setIsbn($valor){
		$this->isbn = $valor;
	}

}
?>