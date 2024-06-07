@extends('layout.layout', ['title' => 'Login'])

@section('content')
    <div class="login-page">

        
        <div class="form">
        <div class="login-form">
            <h1 class="login-name">LOGIN</h1>
            <form action="{{ route('login') }}" method="POST" class="register-form">
                <label for="email">
                    Email:
                    <input id="email" type="email" placeholder="name@example.com" class="input">
                </label>
    
                <label for="password">
                    Senha:
                    <input id="senha" type="password" placeholder="example123" class="input">
                </label>
                <button type="submit" class="button">Entrar</button>
                <p class="message">Não cadastrado? <a href="/resources/views/register.blade.php">Crie uma conta agora!</a></p>
            </form>
        </div>
        </div>
    </div>
@endsection