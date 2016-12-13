<?php
require_once("cabecalho.php");

$categoria = new Categoria();

$categoria->setId($_POST['categoria_id']);


$produto = new Produto($_POST['nome'],$_POST['preco'],$_POST['descricao'],$categoria,"");
$produto->setId($_POST['id']);

if(array_key_exists('usado', $_POST)) {
	$produto->setUsado("true");
} else {
	$produto->setUsado("false");
}


$produtoDao = new produtoDao($conexao);

if($produtoDao->alteraProduto($produto)) { ?>
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