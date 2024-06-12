@extends('layout.layout', ['title' => 'DashBoard'])

@section('content')

<div class="menu">
    <h1 class="login-name">MEUS LIVROS</h1>
    <form action="{{ route('logout') }}" method="POST">
    @csrf
    <button type="submit" class="button-sair">SAIR</button>
    </form>
</div>

<div>
    <table class="list-livros">
        <thead>
            <tr>
                <th scope="col">id</th>
                <th scope="col">autor</th>
                <th scope="col">título</th>
                <th scope="col">edição</th>
                <th scope="col">editora</th>
                <th scope="col">ano de publicação</th>
            </tr>
        </thead>
    </table>
</div>

@endsection