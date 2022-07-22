@extends('app.layouts.basico')
@section('titulo', 'Fornecedor')
@section('conteudo')
    <div class="conteudo-pagina">
        <div class="titulo-pagina-2">
            <p>Fornecedor - Adicionar</p>
        </div>

        <div class="menu">
            <ul>
                <li><a href="{{ route('app.fornecedor.adicionar') }}">Novo</a> </li>
                <li><a href="{{ route('app.fornecedor') }}">Consulta</a> </li>
            </ul>
        </div>

        <div class="informacao-pagina">
            {{ $msg ?? '' }}
            <div class="informacao-pagina-conteudo">
                <form method="post" action="{{ route('app.fornecedor.adicionar') }}">
                    @csrf
                    <input type="hidden" name="id" value="{{ $fornecedor->id ?? '' }}">
                    <input text="text" name="nome" class="borda-preta" value="{{ $fornecedor->nome ?? old('nome') }}"
                        placeholder="Nome">
                    {{ $errors->has('nome') ? $errors->first('nome') : '' }}

                    <input text="text" name="site" class="borda-preta" value="{{ $fornecedor->site ?? old('site') }}"
                        placeholder="Site">
                    {{ $errors->has('site') ? $errors->first('site') : '' }}

                    <input text="text" name="uf" class="borda-preta" value="{{ $fornecedor->uf ?? old('uf') }}"
                        placeholder="UF">
                    {{ $errors->has('uf') ? $errors->first('uf') : '' }}

                    <input text="email" name="email" class="borda-preta"
                        value="{{ $fornecedor->email ?? old('email') }}" placeholder="Email">
                    {{ $errors->has('email') ? $errors->first('email') : '' }}

                    <button type="submit" class="borda-preta">Cadastror</button>
                </form>
            </div>
        </div>

    </div>
@endsection
