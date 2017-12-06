<!Doctype html>
<html>
    <body>
        <h1>Listagem de Produtos</h1>
        <table>
            <?php foreach ($produtos as $produto): ?>
            <tr>
                <td><?=$produto->nome?></td>
                <td><?=$produto->valor?></td>
                <td><?=$produto->descricao?></td>
                <td><?=$produto->quantidade?></td>
            </tr>
            <?php endforeach; ?>
        </table>
    </body>
</html>