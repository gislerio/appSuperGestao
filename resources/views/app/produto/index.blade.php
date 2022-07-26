@extends('app.layouts.basico')
@section('titulo', 'Produto')
@section('conteudo')
    <div class="conteudo-pagina">
        <div class="titulo-pagina-2">
            <p>Listagem de Produtos</p>
        </div>

        <div class="menu">
            <ul>
                <li><a href="{{ route('produto.create') }}">Novo</a> </li>
                <li><a href="">Consulta</a> </li>
            </ul>
        </div>

        <div class="informacao-pagina">
            <div class="informacao-pagina-conteudo-lista">
                <table class="tabela-listar">
                    <thead>
                        <tr>
                            <th>Nome</th>
                            <th>Descrição</th>
                            <th>Nome Fornecedor</th>
                            <th>Site Fornecedor</th>
                            <th>Peso</th>
                            <th>Unidad ID</th>
                            <th>Comprimento</th>
                            <th>Altura</th>
                            <th>Largura</th>
                            <th></th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($produtos as $produto)
                            <tr>
                                <td>{{ $produto->nome }}</td>
                                <td>{{ $produto->descricao }}</td>
                                <td>{{ $produto->fornecedor->nome }}</td>
                                <td>{{ $produto->fornecedor->site }}</td>
                                <td>{{ $produto->peso }}</td>
                                <td>{{ $produto->unidade_id }}</td>
                                <td>{{ $produto->itemDetalhe->comprimento ?? '' }}</td>
                                <td>{{ $produto->itemDetalhe->largura ?? '' }}</td>
                                <td>{{ $produto->itemDetalhe->altura ?? '' }}</td>
                                <td><a href="{{ route('produto.show', ['produto' => $produto->id]) }}">Visualizar</a></td>
                                <td><a href="{{ route('produto.edit', ['produto' => $produto->id]) }}">Editar</a></td>
                                <td>
                                    <form id="form_{{ $produto->id }}" method="post"
                                        action="{{ route('produto.destroy', ['produto' => $produto->id]) }}">
                                        @method('DELETE')
                                        @csrf
                                        <a href="#" onclick="document.getElementById('form_{{$produto->id}}').submit();">Excluir</a>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                {{ $produtos->appends($request)->links() }}
                <br>
                Exibindo {{ $produtos->count() }} produtos de {{ $produtos->total() }} (de
                {{ $produtos->firstItem() }} a {{ $produtos->lastItem() }})
            </div>
        </div>

    </div>
@endsection
