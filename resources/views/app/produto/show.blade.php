@extends('app.layouts.basico')
@section('titulo', 'Produto')
@section('conteudo')
    <div class="conteudo-pagina">
        <div class="titulo-pagina-2">
            <p>Visualizar Produto</p>
        </div>

        <div class="menu">
            <ul>
                <li><a href="{{ route('produto.index') }}">Voltar</a> </li>
                <li><a href="">Consulta</a> </li>
            </ul>
        </div>

        <div class="informacao-pagina">

            <div class="informacao-pagina-conteudo">
                <table class="tabela-listar">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nome</th>
                            <th>Descrição</th>
                            <th>Peso</th>
                            <th>Unidade de Medida</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>{{ $produto->id }}</td>
                            <td>{{ $produto->nome }}</td>
                            <td>{{ $produto->descricao }}</td>
                            <td>{{ $produto->peso }}</td>
                            <td>{{ $produto->unidade_id }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

    </div>
@endsection
