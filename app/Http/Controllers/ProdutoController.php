<?php

namespace Estoque\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
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

        # Regras de validação
        $validator = Validator::make(
            [
                'nome' => Request::input('nome'),
                'descricao' => Request::input('descricao'),
                'valor' => Request::input('valor'),
                'quantidade' => Request::input('quantidade')
            ],
            [
                'nome' => 'required|min:5',
                'descricao' => 'required|max:255',
                'valor' => 'required|numeric',
                'quantidade' => 'required|numeric'
            ]
        );

        if ($validator->fails()) {
            return redirect()->action('ProdutoController@novo');
        }
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

    public function edicao(int $id)
    {
        $produto = Produto::find($id);

        return view('produto.formulario')->withProduto($produto);
    }

    public function edita()
    {
        $id = Request::input('id');

        # Adiciona o produto
        $produto = Produto::find($id);
        
        $produto->nome = Request::input('nome');
        $produto->descricao = Request::input('descricao');
        $produto->valor = Request::input('valor');
        $produto->quantidade = Request::input('quantidade');

        $produto->save();

        # retorna a view
        return redirect()
            ->action('ProdutoController@lista')
            ->withInput(Request::only('nome'));
    }
}
