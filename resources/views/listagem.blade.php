@extends('principal')
@section('conteudo')
	@if(empty($produtos))
		<div class="alert alert-danger"> Você não tem nenhum produto cadastrado </div>
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
				<tr class="{{$produto->quantidade <= 1 ? 'danger' : ''}}">
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
		<h4>
			<span class="label label-danger pull-right">
				Um ou menos ítens no estoque
			</span>
		</h4>
	@stop