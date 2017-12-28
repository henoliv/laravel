<?php

namespace Estoque\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Request;

class ProdutoController extends Controller
{
    public function lista()
    {
        # Coletando
        $produtos = DB::select("SELECT * from produtos");

        if (view()->exists('produto.listagem')) {
            return view('produto.listagem')->withProdutos($produtos);
        }
    }

    public function mostra(int $id)
    {
        # Coletando
        $produtos = DB::select("SELECT * from produtos where id = ?", [$id]);

        if (empty($produtos)) {
            return 'Este produto não existe';
        }

        if (view()->exists('produto.detalhes')) {
            return view('produto.detalhes')->withProduto(current($produtos));
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
        $produtos = DB::select("SELECT * from produtos");
        return $produtos;
    }
}
