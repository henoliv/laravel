<?php

namespace Estoque\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Estoque\Produto;
use Request;

class ProdutoController extends Controller
{
    public function lista()
    {
        # Coletando
        $produtos = Produto::all();

        if (view()->exists('produto.listagem')) {
            return view('produto.listagem')->withProdutos($produtos);
        }
    }

    public function mostra(int $id)
    {
        # Coletando
        $produto = Produto::find($id);

        if (empty($produto)) {
            return 'Este produto não existe';
        }

        if (view()->exists('produto.detalhes')) {
            return view('produto.detalhes')->withProduto($produto);
        }
    }

    public function novo()
    {
        if (view()->exists('produto.formulario')) {
            return view('produto.formulario');
        }
    }

    public function adiciona()
    {
        # Adiciona o produto
        Produto::create(Request::all());

        # retorna a view
        return redirect()
            ->action('ProdutoController@lista')
            ->withInput(Request::only('nome'));
    }

    public function listaJson()
    {
        $produtos = Produto::all();
        return response()->json($produtos);
    }

    public function remove(int $id)
    {
        # Encontra o produto
        $produto = Produto::find($id);

        # remove o produto
        $produto->delete();

        # retorna a view
        return redirect()
            ->action('ProdutoController@lista');
    }
}
