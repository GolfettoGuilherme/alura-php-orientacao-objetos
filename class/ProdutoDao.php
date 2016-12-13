<?php 

class ProdutoDao{

	private $conexao;

	function ProdutoDao($conexao){
		$this->conexao = $conexao;
	}
		
	function listaProdutos() {

		$produtos = array();
		$resultado = mysqli_query($this->conexao, "SELECT p.*,c.nome as categoria_nome FROM 
				produtos as p JOIN categorias as c on c.id=p.categoria_id");

		while($produto_array = mysqli_fetch_assoc($resultado)) {

			$categoria = new Categoria();
			$categoria->setNome($produto_array['categoria_nome']);

			$nome = $produto_array['nome'];
			$preco = $produto_array['preco'];		
			$descricao = $produto_array['descricao'];
			$usado = $produto_array['usado'];	

			$produto = new Produto($nome, $preco, $descricao, $categoria, $usado);
			$produto->setId($produto_array['id']);

			array_push($produtos, $produto);
		}

		return $produtos;
	}

	function insereProduto(Produto $produto) {

		$query = "INSERT INTO produtos (nome, preco, descricao, categoria_id, usado) 
			VALUES ('{$produto->getNome()}', {$produto->getPreco()}, '{$produto->getDescricao()}', {$produto->getCategoria()->getId()}, {$produto->getUsado()})";

		return mysqli_query($this->conexao, $query);
	}

	function alteraProduto(Produto $produto) {

		$query = "UPDATE produtos SET nome = '{$produto->getNome()}', preco = {$produto->getPreco()}, 
			descricao = '{$produto->getDescricao()}', categoria_id= {$produto->getCategoria()->getId()}, 
				usado = {$produto->getUsado()} WHERE id = '{$produto->getId()}'";

		return mysqli_query($this->conexao, $query);
	}

	function buscaProduto($id) {

		$query = "SELECT * FROM produtos WHERE id = {$id}";
		$resultado = mysqli_query($this->conexao, $query);
		$produto_array = mysqli_fetch_assoc($resultado);

		
		$categoria = new Categoria();

		$categoria->setNome($produto_array['categoria_nome']);

		$nome = $produto_array['nome'];
		$preco = $produto_array['preco'];		
		$descricao = $produto_array['descricao'];
		$usado = $produto_array['usado'];		

		$produto = new Produto($nome, $preco, $descricao, $categoria, $usado);
		$produto->setId($produto_array['id']);

		return $produto;
	}

	function removeProduto($id) {

		$query = "DELETE FROM produtos WHERE id = {$id}";

		return mysqli_query($this->conexao, $query);
	}
}

?>