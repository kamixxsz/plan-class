@extends('layout.layout', ['title' => 'Dashboard'])

@section('content')

<div class="menu">
    <h1 class="login-name">MEUS LIVROS</h1>
    <div class="menu-button">
        <a href="{{ route('create') }}" class="button-sair">Adicionar Livro</a>
        <form action="{{ route('logout') }}" method="POST">
            @csrf
            <button type="submit" class="button-sair">SAIR</button>
        </form>
    </div>
</div>

<div class="tablediv">
    <table class="table table-light">
        <thead>
            <tr>
                <th>Capa</th>
                <th>Título</th>
                <th>Subtítulo</th>
                <th>Autor</th>
                <th>Data de Publicação</th>
                <th>Edição</th>
                <th>Editora</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach($books as $book)
                <tr>
                    <td>
                        @if ($book->capa_livro)
                            <img src="{{ $book->capa_livro }}" alt="Capa do Livro" style="max-width: 100px; max-height: 100px;">
                        @else
                            Sem imagem
                        @endif
                    </td>
                    <td>{{ $book->titulo }}</td>
                    <td>{{ $book->subtitulo }}</td>
                    <td>{{ $book->autor }}</td>
                    <td>{{ $book->datadepublicacao }}</td>
                    <td>{{ $book->edicao }}</td>
                    <td>{{ $book->editora }}</td>
                    <td>
                        <a href="{{ route('edit', $book->id) }}" class="btn btn-primary">Editar</a>
                        <form action="{{ route('destroy', $book->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Excluir</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <!-- Exibir links de paginação -->
    {{ $books->links() }}

</div>

@endsection
