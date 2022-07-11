<?php

namespace App\Http\Controllers;

use App\MotivoContato;
use App\SiteContato;
use Illuminate\Http\Request;

class ContatoController extends Controller
{
    
    public function contato(Request $request)
    {
        $motivo_contatos = MotivoContato::all();


        return view('site.contato', ['titulo' => 'Contato', 'motivo_contatos'=> $motivo_contatos]);
    }

    public function salvar(Request $request)
    {
        //realizar a validação dos dados
        $request->validate([
            'name' => 'required|min:3|max:40',
            'telefone' => 'required',
            'email' => 'required',
            'motivo_contato' => 'required',
            'mensagem' => 'required|max:2000'

        ]);
        SiteContato::createde($request->all());
    }
}
