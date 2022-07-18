@extends('site.layouts.basico')
@section('titulo', $titulo)
@section('conteudo')
    <div class="conteudo-pagina">
        <div class="titulo-pagina">
            <h1>Login</h1>
        </div>
        <div class="informacao-pagina">
            <div class="loginAcesso">
                <form action={{ route('site.login') }} method="post">
                    @csrf
                    <input name="usuario" value="{{ old('usuario') }}" type="text" placeholder="Usuário" class="borda-preta">
                    {{ $errors->has('usuario') ? $errors->first('usuario') : '' }}
                    <input name="senha" type="password" placeholder="Senha" class="borda-preta">
                    {{ $errors->has('senha') ? $errors->first('senha') : '' }}
                    <button type="submit" class="borda-preta">Acessar</button>
                </form>
            </div>
        </div>
    </div>
    <div class="rodape">
        <div class="redes-sociais">
            <h2>Redes sociais</h2>
            <img src="{{ 'img/facebook.png' }}">
            <img src="{{ 'img/linkedin.png' }}">
            <img src="{{ 'img/youtube.png' }}">
        </div>
        <div class="area-contato">
            <h2>Contato</h2>
            <span>(11) 3333-4444</span>
            <br>
            <span>supergestao@dominio.com.br</span>
        </div>
        <div class="localizacao">
            <h2>Localização</h2>
            <img src="{{ 'img/mapa.png' }}">
        </div>
    </div>
@endsection
