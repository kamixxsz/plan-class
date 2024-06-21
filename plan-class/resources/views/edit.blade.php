@extends('layout.layout', ['title' => 'Editar Livro'])

@section('content')

<div class="menu">
    <h1 class="login-name">MEUS LIVROS</h1>
    <div class="menu-button">
        <a href="{{ route('dashboard') }}" class="button-sair">DASHBOARD</a>
        <a href="{{ route('create') }}" class="button-sair">ADICIONAR LIVRO</a>
        <form action="{{ route('logout') }}" method="POST">
            @csrf
            <button type="submit" class="button-sair">SAIR</button>
        </form>
    </div>
</div>

<div class="form">
<h3 class="login-name">ATUALIZE SEU LIVRO</h3>
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
            <input type="text" id="titulo" name="titulo" class="input1" value="{{ $book->titulo }}">
        </div>

        <div class="form-group">
            <label for="subtitulo">Subtítulo do Livro</label>
            <input type="text" id="subtitulo" name="subtitulo" class="input1" value="{{ $book->subtitulo }}">
        </div>

        <div class="form-group">
            <label for="autor">Autor do Livro</label>
            <input type="text" id="autor" name="autor" class="input1" value="{{ $book->autor }}">
        </div>

        <div class="form-group">
            <label for="datadepublicacao">Data de Publicação</label>
            <input type="date" id="datadepublicacao" name="datadepublicacao" class="input1" value="{{ $book->datadepublicacao }}">
        </div>

        <div class="form-group">
            <label for="edicao">Edição do Livro</label>
            <input type="text" id="edicao" name="edicao" class="input1" value="{{ $book->edicao }}">
        </div>

        <div class="form-group">
            <label for="editora">Editora do Livro</label>
            <input type="text" id="editora" name="editora" class="input1" value="{{ $book->editora }}">
        </div>

        <button type="submit" class="button-sair">Salvar Alterações</button>
    </form>
</div>

@endsection