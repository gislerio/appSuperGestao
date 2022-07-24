@if (isset($produto->id))
    <form method="post" action="{{ route('produto.update', ['produto' => $produto->id]) }}">
        @csrf
        @method('PUT')
    @else
        <form method="post" action="{{ route('produto.store') }}">
            @csrf
@endif
<input type="hidden" name="id" value="">
<input text="text" name="nome" class="borda-preta" value="{{ $produto->nome ?? old('nome') }}" placeholder="Nome">
{{ $errors->has('nome') ? $errors->first('nome') : '' }}

<input text="text" name="descricao" class="borda-preta" value="{{ $produto->descricao ?? old('descricao') }}"
    placeholder="Descrição">
{{ $errors->has('descricao') ? $errors->first('descricao') : '' }}

<input text="text" name="peso" class="borda-preta" value="{{ $produto->peso ?? old('peso') }}" placeholder="Peso">
{{ $errors->has('text') ? $errors->first('text') : '' }}

<select name="unidade_id">
    <option>Selecione a Unidade de Medida</option>
    @foreach ($unidades as $unidade)
        <option value="{{ $unidade->id }}"
            {{ ($produto->unidade_id ?? old('unidade_id')) == $unidade->id ? 'selected' : '' }}>
            {{ $unidade->descricao }}</option>
    @endforeach
</select>
{{ $errors->has('unidade_id') ? $errors->first('unidade_id') : '' }}


<button type="submit" class="borda-preta">Cadastror</button>
</form>
