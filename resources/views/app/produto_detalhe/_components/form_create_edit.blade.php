@if (isset($produto_detalhe->id))
    <form method="post" action="{{ route('produto-detalhe.update', ['produto_detalhe' => $produto_detalhe->id]) }}">
        @csrf
        @method('PUT')
    @else
        <form method="post" action="{{ route('produto-detalhe.store') }}">
            @csrf
@endif
<input type="hidden" name="id" value="">
<input text="text" name="produto_id" class="borda-preta" value="{{ $produto_detalhe->produto_id ?? old('produto_id') }}" placeholder="Id do produto">
{{ $errors->has('produto_id') ? $errors->first('produto_id') : '' }}

<input text="text" name="comprimento" class="borda-preta" value="{{ $produto_detalhe->comprimento ?? old('comprimento') }}"
    placeholder="Comprimento">
{{ $errors->has('comprimento') ? $errors->first('comprimento') : '' }}

<input text="text" name="largura" class="borda-preta" value="{{ $produto_detalhe->largura ?? old('largura') }}" placeholder="Largura">
{{ $errors->has('largura') ? $errors->first('largura') : '' }}

<input text="text" name="altura" class="borda-preta" value="{{ $produto_detalhe->altura ?? old('altura') }}" placeholder="altura">
{{ $errors->has('altura') ? $errors->first('altura') : '' }}

<select name="unidade_id">
    <option>Selecione a Unidade de Medida</option>
    @foreach ($unidades as $unidade)
        <option value="{{ $unidade->id }}"
            {{ ($produto_detalhe->unidade_id ?? old('unidade_id')) == $unidade->id ? 'selected' : '' }}>
            {{ $unidade->descricao }}</option>
    @endforeach
</select>
{{ $errors->has('unidade_id') ? $errors->first('unidade_id') : '' }}


<button type="submit" class="borda-preta">Cadastrar</button>
</form>
