@extends('layout.principal')
@section('conteudo')
    <h1>Novo Produto</h1>
    <form>
        <div class="form-group">
            <label>Nome</label>
            <input class="form-control"/>
        </div>
        <div class="form-group">
            <label>Descricao</label>
            <input class="form-control"/>
        </div>
        <div class="form-group">
            <label>Valor</label>
            <input class="form-control"/>
        </div>
        <div class="form-group">
            <label>Quantidade</label>
            <input class="form-control" type="number"/>
        </div>
        <div class="form-group">
            <button class="btn btn-primary btn-block" type="submit">Adicionar</button>
        </div>
    </form>
@stop