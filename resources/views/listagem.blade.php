@extends('principal') @section('conteudo')
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
		<?php foreach ($produtos as $produto):  ?>
		<tr>
			<td>{{ $produto->nome }}</td>
			<td>{{ $produto->valor }}</td>
			<td>{{ $produto->descricao }}</td>
			<td>{{ $produto->quantidade }}</td>
			<td>
				<a href="produtos/mostra/{{ $produto->id }}">
					<span class="glyphicon glyphicon-search"></span>
				</a>
			</td>
		</tr>
		<?php endforeach; ?>
	</tbody>
</table>
@stop