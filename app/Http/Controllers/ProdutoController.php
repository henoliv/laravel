<?php

namespace Estoque\Http\Controllers;

use Illuminate\Support\Facades\DB;

class ProdutoController extends Controller
{
    public function lista()
    {
        # Coletando
        $produtos = DB::select("SELECT * from produtos");

        if (view()->exists('listagem')) {
            return view('listagem')->withProdutos($produtos);
        }
    }
}
