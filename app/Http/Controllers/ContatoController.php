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


        return view('site.contato', ['titulo' => 'Contato', 'motivo_contatos' => $motivo_contatos]);
    }

    public function salvar(Request $request)
    {
        //realizar a validação dos dados do formulário recebidos no request
        $request->validate(
            [
                'nome' => 'required|min:3|max:40',
                'telefone' => 'required',
                'email' => 'email',
                'motivo_contatos_id' => 'required',
                'mensagem' => 'required|max:2000'
            ],
            [
                'nome.min' => 'O campo nome precisa ter no mínimo 3 carcteres',
                'nome.max' => 'O campo nome ter no máximo 40 caracters carcteres',
                
                'email.email' => 'O email informado não é válido',
                'required' => 'O campo :attribute deve precisa ser preechido',
                'mensagem.max' => 'A mensagem deve ter no máximo 2000 caracteres'
            ]
        );
        SiteContato::create($request->all());
        return redirect()->route('site.index');
    }
}
