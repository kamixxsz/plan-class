@extends('layout.layout', ['title' => 'Registro'])

@section('content')
 
        <div class="login-page">
        <div class="form-cadastro">
        @if($errors->any())
        <div class="alert">
        <ul>
        @foreach($errors->all() as $error)
            <li>{{$error}}</li>
        @endforeach
        </ul>
        </div>
        @endif
        <h1 class="login-name">CADASTRE-SE</h1>
        <br>
        <form action="{{ route('register') }}" method="POST" class="register-form">
            @csrf
            <label for="">
                Nome:
                <input type="text" name="name" placeholder="Nome" class="input">
            </label>
            <br>
            <label for="">
                Email:
                <input type="email" name="email" placeholder="email@gmail.com" class="input">
            </label>
            <br>
            <label for="">
                Senha:
                <input type="password" name="password" class="input" placeholder="password123">
            </label>
            <br>
            <label for="">
                Confirmar Senha:
                <input type="password" name="password_confirmation" class="inputunique" placeholder="password123">
            </label>
            <br>
            <button class="button" >Cadastrar</button>
            <p class="message">Já cadastrado? <a href="{{route('login')}}">Faça login agora!</a></p>
            </form>
        </form>
        </div>
    </div>
@endsection
