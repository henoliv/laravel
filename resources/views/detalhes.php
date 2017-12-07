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
        <h1>Detalhes do produto: <?=$produto->nome?></h1>
        <ul>
            <li>Valor: <?=$produto->valor?></li>
            <li>Descrição: <?=$produto->descricao?></li>
            <li>Quantidade em estoque: <?=$produto->quantidade?></li>
        </ul>
    </div>
</body>

</html>