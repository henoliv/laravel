<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">
	<link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>
	<link href="/css/custom.css" rel="stylesheet">
	<title>Controle de estoque</title>
</head>

<body>
	<nav class="navbar navbar-default">
		<div class="container-fluid">
			<div class="navbar-header">
				<a class="navbar-brand" href="/produtos">Estoque Laravel</a>
			</div>
			<ul class="nav navbar-nav navbar-right">
				<li><a href="/produtos">Listagem</a></li>
			</ul>
		</div>
	</nav>
	<div class="container">
		@yield('conteudo')
	</div>
	<footer class="footer">
		<p>&copy; Livro de Larave da Casa do Código.</p>
	</footer>
</body>

</html>