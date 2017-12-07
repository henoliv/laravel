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

        if (view()->exists('listagem')) {
            return view('listagem')->withProdutos([]);
        }
    }

    public function mostra(int $id)
    {
        # Coletando
        $produtos = DB::select("SELECT * from produtos where id = ?", [$id]);

        if (empty($produtos)) {
            return 'Este produto não existe';
        }

        if (view()->exists('detalhes')) {
            return view('detalhes')->withProduto(current($produtos));
        }
    }
}
