@extends('layout.layout', ['title' => 'Login'])

@section('content')
    <div class="container-sm">
        <h1>Login</h1>
        <div class="row justify-content-center">
            <form action="{{ route('login') }}" method="POST">
                <label for="email">
                    Email:
                    <input class="form-control form-control-lg" id="email" type="email" placeholder="name@example.com">
                </label>
    
                <label for="password">
                    Senha:
                    <input class="form-control form-control-lg" id="senha" type="password" placeholder="example123">
                </label>
                <button class="btn btn-primary" type="submit">Entrar</button>
            </form>
        </div>
    </div>
@endsection