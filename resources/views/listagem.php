<!Doctype html>
<html>

<head>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">
    <!-- Fonts -->
    <link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>
    <title>Controle de estoque</title>
</head>

<body>
    <h1>Listagem de Produtos</h1>
    <table class="table table-striped table-bordered table-hover">
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
        </tr>
        <?php endforeach; ?>
    </table>
</body>

</html>