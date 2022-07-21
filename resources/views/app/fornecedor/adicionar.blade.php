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
            <div class="informacao-pagina-conteudo">
                <form method="post" action="">
                    <input text="text" name="nome" class="borda-preta" placeholder="Nome">
                    <input text="text" name="site" class="borda-preta" placeholder="Site">
                    <input text="text" name="uf" class="borda-preta" placeholder="UF">
                    <input text="email" name="email" class="borda-preta" placeholder="Email">
                    <button type="submit" class="borda-preta">Cadastror</button>
                </form>
            </div>
        </div>

    </div>
@endsection