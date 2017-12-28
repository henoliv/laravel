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
        # coleta os dados da view
        $nome = Request::input('nome');
        $descricao = Request::input('descricao');
        $valor = Request::input('valor');
        $quantidade = Request::input('quantidade');

        # salva no banco
        DB::table('produtos')->insert(
            [
                'nome' => $nome,
                'descricao' => $descricao,
                'valor' => $valor,
                'quantidade' => $quantidade
            ]
        );

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
}
