<?php

namespace Estoque\Http\Controllers;

use Estoque\Http\Requests;
use Estoque\Http\Controllers\Controller;
use Auth;
use Request;

class LoginController extends Controller
{
    public function login()
    {
        $credenciais = Request::only('email', 'password');

        if (Auth::attempt($credenciais)) {
            return 'Login foi';
        }

        return 'não logou';
    }
}
