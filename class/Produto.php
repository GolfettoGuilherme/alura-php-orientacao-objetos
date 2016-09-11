<?php  
	
	class Produto{

		private $id;
		private $nome;
		private $preco;
		private $descricao;
		private $categoria;
		private $usado;


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

		public function setNome($valor){
			$this->nome = $valor;
		}
		public function setDescricao($valor){
			$this->descricao = $valor;
		}
		public function setCategoria($valor){
			$this->categoria = $valor;
		}
		public function setId($valor){
			$this->id = $valor;
		}
		public function setUsado($valor){
			$this->usado = $valor;
		}

	}

?>