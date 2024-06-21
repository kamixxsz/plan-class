@extends('layout.layout', ['title' => 'Login'])

@section('content')
    <div class="login-page">
        <div class="form">
        @if($errors->any())
        <div class="alert">
        <ul>
        @foreach($errors->all() as $error)
            <li>{{$error}}</li>
        @endforeach
        </div>
        @endif
        <div class="login-form">
            <h1 class="login-name">LOGIN</h1>
            <br>
            <form action="{{ route('login') }}" method="POST" class="register-form">
            @csrf
            <label for="email">
                    Email:
                    <input name="email" type="email" placeholder="name@example.com" class="input">
                </label>
    
                <label for="password">
                    Senha:
                    <input name="password" type="password" placeholder="example123" class="input">
                </label>
                <br>
                <button type="submit" class="button">Entrar</button>
                <p class="message">Não cadastrado? <a href="{{route('register')}}">Crie uma conta agora!</a></p>
            </form>
        </div>
    </div>
@endsection