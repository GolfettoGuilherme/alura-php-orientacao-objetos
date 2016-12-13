<?php  
	
	class Produto{

		private $id;
		private $nome;
		private $preco;
		private $descricao;
		private $categoria;
		private $usado;

		//construtor
		function __construct($nome, $preco, $descricao, Categoria $categoria, $usado){
			$this->nome = $nome;
			$this->preco = $preco;
			$this->descricao = $descricao;
			$this->categoria = $categoria;
			$this->usado = $usado;
		}


		public function precoComDesconto($valor = 0.1){
			if ($valor > 0 && $valor <= 0.5) {
				$this->preco -= $this->preco * $valor;
				return $this->preco;	
			}
		}

		public function precoComFrete($distancia){
			
		}

		public function getPreco(){
			return $this->preco;
		}

		public function setPreco($preco){
			if ($preco > 0) {
				$this->preco = $preco;	
			}
		}


		public function getNome(){
			return $this->nome;
		}
		public function getDescricao(){
			return $this->descricao;
		}
		public function getCategoria(){
			return $this->categoria;
		}
		public function getUsado(){
			return $this->usado;
		}
		public function getId(){
			return $this->id;
		}

		public function setId($valor){
			$this->id = $valor;
		}
		public function setUsado($valor){
			$this->usado = $valor;
		}

		function __toString(){
			return $this->nome . " : R$". $this->preco;
		}

		function __destruct(){
			
		}
	}

?>