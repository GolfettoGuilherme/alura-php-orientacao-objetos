<?php  

	$produto = new Produto();
	$produto->setPreco(59.9);
	$produto->setNome("Livro da casa do código");

	$outroProduto = new Produto();
	$outroProduto->setPreco(59.9);
	$outroProduto->setNome("Livro da casa do código");


	$outroProduto = $produto;

	if ($produto === $outroProduto) {
		echo "são iguais";
	} else{
		echo "são diferentes";
	}

?>