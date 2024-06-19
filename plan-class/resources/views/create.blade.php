@extends('layout.layout', ['title' => 'Criar Livro'])

@section('content')

<div class="menu">
    <h1 class="login-name">ADICIONAR LIVROS</h1>
    <a href="{{ route('dashboard') }}" class="button-sair">DASHBOARD</a>
</div>
<form action="{{ route('store') }}" method="POST">
    @csrf

    <div class="form-group">
        <label for="titulo">Título:</label>
        <input type="text" class="form-control" id="titulo" name="titulo" value="{{ old('titulo', $book->titulo) }}">
    </div>

    <div class="form-group">
        <label for="subtitulo">Subtítulo:</label>
        <input type="text" class="form-control" id="subtitulo" name="subtitulo" value="{{ old('subtitulo', $book->subtitulo) }}">
    </div>

    <div class="form-group">
        <label for="autor">Autor:</label>
        <input type="text" class="form-control" id="autor" name="autor" value="{{ old('autor', $book->autor) }}">
    </div>

    <div class="form-group">
        <label for="ano_publicacao">Ano de Publicação:</label>
        <input type="text" class="form-control" id="datadepublicação" name="datadepublicação" value="{{ old('datadepublicação', $book->datadepublicação) }}">
    </div>

    <div class="form-group">
        <label for="edicao">Edição:</label>
        <input type="text" class="form-control" id="edicao" name="edicao" value="{{ old('edicao', $book->edicao) }}">
    </div>

    <div class="form-group">
        <label for="editora">Editora:</label>
        <input type="text" class="form-control" id="editora" name="editora" value="{{ old('editora', $book->editora) }}">
    </div>

    <button type="submit" class="btn btn-success" href="{{ route('dashboard') }}">Salvar</button>
</form>

@endsection
