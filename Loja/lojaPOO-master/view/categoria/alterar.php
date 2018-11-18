<?php
$categoria = $dados['categorias'][0];
?>
<div class="main">
	<div class="jumbotron">
		<h2>Alterar Categoria</h2>

		<form method="post" action="index.php?acao=gravaAlterar&id=<?= $categoria->getId() ?>">
	    Nome <input type="text" name="nome" value="<?= $categoria->getNome() ?>">
	    Descrição <input type="text" name="descricao" value="<?= $categoria->getDescricao() ?>">
	    	<input type="submit">
		</form>
	</div>
</div>

