<!Doctype html>
<html>

<head>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">
    <!-- Fonts -->
    <link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>
    <title>Controle de estoque</title>
</head>

<body>
    <div class="container">
        <h1>Listagem de Produtos</h1>
        <table class="table table-striped table-bordered table-hover">
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Valor</th>
                    <th>Descrição</th>
                    <th>Quantidade em estoque</th>
                    <th>Detalhes</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($produtos as $produto): ?>
                <tr>
                    <td>
                        <?=$produto->nome?>
                    </td>
                    <td>
                        <?=$produto->valor?>
                    </td>
                    <td>
                        <?=$produto->descricao?>
                    </td>
                    <td>
                        <?=$produto->quantidade?>
                    </td>
                    <td>
                        <a href="produtos/mostra/<?=$produto->id?>">
                            <span class="glyphicon glyphicon-search"></span>
                        </a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>

</html>