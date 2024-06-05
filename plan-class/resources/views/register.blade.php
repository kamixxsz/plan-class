@extends('layout.layout', ['title' => 'Registro'])

@section('content')
  
    <div class="container">
        <h1>Página de Cadastro</h1>
        <br>
        <form action="{{ route('register') }}" method="POST">
            @csrf
            <label for="">
                Nome:
                <input type="text" name="name" class="form-control">
            </label>
            <br>
            <label for="">
                Email:
                <input type="email" name="email" class="form-control">
            </label>
            <br>
            <label for="">
                Senha:
                <input type="password" name="password" class="form-control">
            </label>
            <br>
            <label for="">
                Confirmar Senha:
                <input type="password" name="password_confirmation" class="form-control">
            </label>
            <br>
            <button class="btn btn-primary" >Cadastrar</button>
        </form>
    </div>
@endsection
