@extends('layout.principal')
@section('conteudo')
    <h1>Novo Produto</h1>
    <form action="/produtos/adiciona">
        <div class="form-group">
            <label>Nome</label>
            <input name="nome" class="form-control"/>
        </div>
        <div class="form-group">
            <label>Descricao</label>
            <input name="descricao" class="form-control"/>
        </div>
        <div class="form-group">
            <label>Valor</label>
            <input name="valor" class="form-control"/>
        </div>
        <div class="form-group">
            <label>Quantidade</label>
            <input name="quantidade" class="form-control" type="number"/>
        </div>
        <div class="form-group">
            <button class="btn btn-primary btn-block" type="submit">Adicionar</button>
        </div>
    </form>
@stop