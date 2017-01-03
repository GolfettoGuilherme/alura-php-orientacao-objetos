<tr>
	<td>Nome</td>
	<td>
		<input class="form-control" type="text" name="nome" 
			value="<?=$produto->getNome() ?>">
	</td>
</tr>
<tr>
	<td>Preço</td>
	<td>
		<input class="form-control" type="number" step="0.01" name="preco" 
			value="<?=$produto->getPreco() ?>">
	</td>
</tr>
<tr>
	<td>Descrição</td>
	<td>
		<textarea class="form-control" name="descricao"><?= $produto->getDescricao() ?></textarea>
	</td>
</tr>
<tr>
	<td></td>
	<td><input type="checkbox" name="usado" <?=$produto->getUsado() ?> value="true"> Usado
</tr>
<tr>
	<td>Categoria</td>
	<td>
		<select name="categoria_id" class="form-control">
			<?php
			foreach($categorias as $categoria) : 
				$essaEhACategoria = $produto->getCategoria()->getId()  == $categoria->getId() ;
				$selecao = $essaEhACategoria ? "selected='selected'" : "";
			?>
				<option value="<?=$categoria->getId() ?>" <?=$selecao?>>
					<?=$categoria->getNome() ?>
				</option>
			<?php 
			endforeach
			?>
		</select>
	</td>
</tr>
<tr>
	<td>Tipo do Produto</td>
	<td>
		<select name="tipoProduto" class="form-control">
			<optgroup label="Livros">
				<?php
				$tipos = array("Livro Fisico", "Ebook");
				foreach($tipos as $tipo) : 
					$tipoSemEspaco = str_replace(" ", "", $tipo);
					$essaEhOTipo = get_class($produto)  == $tipoSemEspaco;
					$selecao = $essaEhOTipo ? "selected='selected'" : "";
				?>
					<option value="<?=$tipoSemEspaco ?>" <?=$selecao?>>
						<?=$tipo ?>
					</option>		
				<?php endforeach ?>
			</optgroup>			
		</select>
	</td>
</tr>
<tr>
	<td>ISBN (caso seja um livro)</td>
	<td>
		<?php if ($produto->temIsbn()): ?>
			<input type="text" name="isbn" class="form-control" value="<?= $produto->getIsbn() ?>">
		<?php else: ?>
			<input type="text" name="isbn" class="form-control">
		<?php endif ?>
	</td>
</tr>
<tr>
	<td>Taxa Impressão (caso seja um livro Físico)</td>
	<td>
		<?php if ($produto->temTaxaImpressao()): ?>
			<input type="text" name="taxaImpressao" class="form-control" value="<?= $produto->getTaxaImpressao() ?>">
		<?php else: ?>
			<input type="text" name="taxaImpressao" class="form-control">
		<?php endif ?>
	</td>
</tr>
<tr>
	<td>WaterMark (caso seja um livro)</td>
	<td>
		<?php if ($produto->temWaterMark()): ?>
			<input type="text" name="waterMark" class="form-control" value="<?= $produto->getWaterMark() ?>">
		<?php else: ?>
			<input type="text" name="waterMark" class="form-control">
		<?php endif ?>
	</td>
</tr>
