<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index()
    {
        return view('site.login', ['titulo' => 'login']);
    }

    public function autenticar(Request $request)
    {
        //regras de validação
        $regras =[
            'usuario'=> 'email',
            'senha'=> 'required'
        ];
        
        // as mensagens de feedback de validação
        $feedback = [
            'usuario.email' => 'O campo usuário email é obrigatório',
            'senha.required' => 'O campo senha é obrigatório'
        ];
        
        $request->validate($regras, $feedback);
        print_r($request->all());exit;
        
    }
}
