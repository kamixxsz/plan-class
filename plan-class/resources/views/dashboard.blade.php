@extends('layout.layout', ['title' => 'DashBoard'])

@section('content')

<div class="menu">
    <h1 class="login-name">MEUS LIVROS</h1>
    <form action="{{ route('logout') }}" method="POST">
    @csrf
    <button type="submit" class="button-sair">SAIR</button>
    </form>
</div>

@extends('layouts.app')

@section('content')
    <h1>Livros</h1>
    <table class="table">
        <thead>
            <tr>
                <th>Título</th>
                <th>Autor</th>
                <th>Editora</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach($books as $book)
                <tr>
                    <td>{{ $book->title }}</td>
                    <td>{{ $book->author }}</td>
                    <td>{{ $book->publisher }}</td>
                    <td>
                        <a href="{{ route('books.edit', $book->id) }}" class="btn btn-primary">Editar</a>
                        <a href="{{ route('books.destroy', $book->id) }}" class="btn btn-danger">Excluir</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <a href="{{ route('books.create') }}" class="btn btn-success">Adicionar Livro</a>
@endsection

@endsection