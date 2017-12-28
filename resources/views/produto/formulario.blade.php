@extends('layout.principal')
@section('conteudo')
    <h1>Novo Produto</h1>
        <form method="POST" action="{{isset($produto) ? action('ProdutoController@edita') : action('ProdutoController@adiciona')}}">
        <div class="form-group">
            <label>Nome</label>
            <input name="nome" value="{{isset($produto) ? $produto->nome : ''}}" class="form-control"/>
        </div>
        <div class="form-group">
            <label>Descricao</label>
            <input name="descricao" value="{{isset($produto) ? $produto->descricao : ''}}" class="form-control"/>
        </div>
        <div class="form-group">
            <label>Valor</label>
            <input name="valor" value="{{isset($produto) ? $produto->valor : ''}}" class="form-control"/>
        </div>
        <div class="form-group">
            <label>Quantidade</label>
            <input name="quantidade" value="{{isset($produto) ? $produto->quantidade : ''}}" class="form-control" type="number"/>
        </div>
        <div class="form-group">
            <input type="hidden" name="_token" value="{{{csrf_token()}}}">
            @if(isset($produto))
                <input type="hidden" name="id" value="{{$produto->id}}">
            @endif
            <button class="btn btn-primary btn-block" type="submit">
                {{isset($produto) ? 'Editar' : 'Adicionar'}}
            </button>
        </div>
    </form>
@stop