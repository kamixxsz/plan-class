@extends('layout.layout', ['title' => 'Editar Livro'])

@section('content')

<div class="menu">
    <h1 class="login-name">MEUS LIVROS - Editar Livro</h1>
    <a href="{{ route('dashboard') }}" class="button-voltar">Voltar</a>
</div>

<div class="form-container">
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('update', $book->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="titulo">Título do Livro</label>
            <input type="text" id="titulo" name="titulo" class="form-control" value="{{ $book->titulo }}">
        </div>

        <div class="form-group">
            <label for="subtitulo">Subtítulo do Livro</label>
            <input type="text" id="subtitulo" name="subtitulo" class="form-control" value="{{ $book->subtitulo }}">
        </div>

        <div class="form-group">
            <label for="autor">Autor do Livro</label>
            <input type="text" id="autor" name="autor" class="form-control" value="{{ $book->autor }}">
        </div>

        <div class="form-group">
            <label for="datadepublicacao">Data de Publicação</label>
            <input type="date" id="datadepublicacao" name="datadepublicacao" class="form-control" value="{{ $book->datadepublicacao }}">
        </div>

        <div class="form-group">
            <label for="edicao">Edição do Livro</label>
            <input type="text" id="edicao" name="edicao" class="form-control" value="{{ $book->edicao }}">
        </div>

        <div class="form-group">
            <label for="editora">Editora do Livro</label>
            <input type="text" id="editora" name="editora" class="form-control" value="{{ $book->editora }}">
        </div>

        <button type="submit" class="btn btn-primary">Salvar Alterações</button>
    </form>
</div>

@endsection