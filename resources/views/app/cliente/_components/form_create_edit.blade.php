@if (isset($cliente->id))
    <form method="post" action="{{ route('cliente.update', ['cliente' => $cliente->id]) }}">
        @csrf
        @method('PUT')
    @else
        <form method="post" action="{{ route('cliente.store') }}">
            @csrf
@endif

<input text="text" name="nome" class="borda-preta" value="{{ $cliente->nome ?? old('nome') }}" placeholder="Nome">
{{ $errors->has('nome') ? $errors->first('nome') : '' }}

<button type="submit" class="borda-preta">Cadastrar</button>
</form>
