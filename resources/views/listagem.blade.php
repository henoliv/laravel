@extends('principal')
@section('conteudo')
	@if(empty($produtos))
		<div> Você não tme nenhum prduto cadastrado </aiv>
	@else
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
				@foreach ($produtos as $produto)
				<tr>
					<td>{{ $produto->nome }}</td>
					<td>{{ $produto->valor }}</td>
					<td>{{ $produto->descricao }}</td>
					<td>{{ $produto->quantidade }}</td>
					<td>
						<a href="mostra/{{ $produto->id }}">
							<span class="glyphicon glyphicon-search"></span>
						</a>
					</td>
				</tr>
				@endforeach
			</tbody>
		</table>
		@endif
	@stop