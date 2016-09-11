<?php
require_once("cabecalho.php");
require_once("banco-produto.php");
require_once("class/Produto.php");
require_once('class/Categoria.php');


$produto = new Produto();
$categoria = new Categoria();

$categoria->setId($_POST['categoria_id']);


$produto->setId($_POST['id']);
$produto->setNome($_POST['nome']);
$produto->setpreco($_POST['preco']);
$produto->setDescricao($_POST['descricao']);

if(array_key_exists('usado', $_POST)) {
	$produto->setUsado("true");
} else {
	$produto->setUsado("false");
}

$produto->setCategoria($categoria);

if(alteraProduto($conexao, $produto)) { ?>
	<p class="text-success">O produto <?= $produto->getNome() ?>, <?= $produto->getpreco() ?> foi alterado.</p>
<?php 
} else {
	$msg = mysqli_error($conexao);
?>
	<p class="text-danger">O produto <?= $produto->getNome() ?> não foi alterado: <?= $msg?></p>
<?php
}
?>

<?php include("rodape.php"); ?>