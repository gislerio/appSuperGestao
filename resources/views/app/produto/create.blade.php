@extends('app.layouts.basico')
@section('titulo', 'Produto')
@section('conteudo')
    <div class="conteudo-pagina">
        <div class="titulo-pagina-2">
            <p>Adicionar Produto</p>
        </div>

        <div class="menu">
            <ul>
                <li><a href="{{ route('produto.index') }}">Voltar</a> </li>
                <li><a href="">Consulta</a> </li>
            </ul>
        </div>

        <div class="informacao-pagina">

            <div class="informacao-pagina-conteudo">
                <form method="post" action="">
                    @csrf
                    <input type="hidden" name="id" value="">
                    <input text="text" name="nome" class="borda-preta" value="" placeholder="Nome">

                    <input text="text" name="descricao" class="borda-preta" value="" placeholder="Descrição">


                    <input text="text" name="peso" class="borda-preta" value="" placeholder="Peso">
                    <select name="unidade_id">
                        <option>Selecione a Unidade de Medida</option>
                        @foreach ($unidades as $unidade)
                            <option value="{{ $unidade->id }}">{{ $unidade->descricao }}</option>
                        @endforeach
                    </select>


                    <button type="submit" class="borda-preta">Cadastror</button>
                </form>
            </div>
        </div>

    </div>
@endsection
