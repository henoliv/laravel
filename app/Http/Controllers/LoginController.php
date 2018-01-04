<?php

namespace Estoque\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        $credenciais = $request->only('email', 'password');

        if (Auth::attempt($credenciais)) {
            return Auth::user()->name . ' logado com sucesso';
        }

        return 'não logou';
    }
}
