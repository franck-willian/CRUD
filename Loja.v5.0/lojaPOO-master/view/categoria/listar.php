

<table class="main" id="categoria">
    <h1 ="h1cat">Categoria de Produtos</h1>
    <thead>

        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Descrição</th>
            <th>Ações</th>
        </tr>
    </thead>
    <tbody>
<?php


    $categorias = $dados['categorias'];
    foreach ($categorias as $categoria){
        echo '<tr>';
        echo '<td>'.$categoria->getId().'</td>';
        echo '<td><a href="index.php?acao=detalhes&id='.$categoria->getId().'"><button class="bt-info">'.utf8_encode($categoria->getNome()).'</button></a></td>';
        echo '<td class="descri">'.utf8_encode($categoria->getDescricao()).'</td>'; //convertando de ISO para UTF-8
        echo '<td><a href="index.php?acao=alterar&id='.$categoria->getId().'"><button class="bt-alt">Alterar</button></a><a href="index.php?acao=excluir&id='.$categoria->getId().'"><button class="bt-del">Excluir</button></a></td>';
        echo '</tr>';
    }
?>
    </tbody>
</table>


