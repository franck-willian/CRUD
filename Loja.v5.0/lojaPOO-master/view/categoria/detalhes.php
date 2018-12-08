<?php
//capturo o objeto categoria que foi passado em $dados
$categoria = $dados['categorias'][0];
?>
<div class="main">
	<div class="jumbotron">
		<h2>Detalhes da Categoria</h2>
		<p>ID: <?= $categoria->getId() ?></p>
		<p>Nome: <?= utf8_encode($categoria->getNome()) ?></p>
		<p>Descrição: <?= utf8_encode($categoria->getDescricao()) ?></p>
		<p>
		<a href="index.php?acao=alterar&id=<?= $categoria->getId() ?>"><button class="bt-alt">Alterar</button></a>
		<a href="index.php?acao=excluir&id=<?= $categoria->getId() ?>"><button class="bt-del">Excluir</button></a>
		</p>
	</div>
</div>

