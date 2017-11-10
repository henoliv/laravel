<?php

namespace Estoque\Http\Controllers;

use Illuminate\Support\Facades\DB;

class ProdutoController extends Controller
{
    public function lista(): string
    {
        # Coletando
        $produtos = DB::select("SELECT * from produtos");

        $html = "<h1>Listagem de produtos com Laravel</h1>";
        $html .= "<ul>";

        foreach ($produtos as $produto) {
            $html .= "<li>Nome: {$produto->nome}, Descrição: {$produto->descricao}</li>";
        }

        $html .= "</ul>";

        return $html;
    }
}
