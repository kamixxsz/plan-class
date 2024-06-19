@extends('layouts.app')

@section('content')
    <h1>Editar Livro</h1>
    <form method="POST" action="{{ route('update', $book->id) }}">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="titulo">Título</label>
            <input type="text" class="form-control" id="tittulo" name="titulo" value="{{ $book->titulo }}">
        </div>

        <div class="form-group">
            <label for="author">Subtítulo</label>
            <input type="text" class="form-control" id="subtitulo" name="subtitulo" value="{{ $book->subtitulo }}">
        </div>

        <div class="form-group">
            <label for="author">Autor</label>
            <input type="text" class="form-control" id="autor" name="autor" value="{{ $book->autor }}">
        </div>

        <div class="form-group">
            <label for="author">Data de Publicação</label>
            <input type="text" class="form-control" id="datadepublicação" name="datadepublicação" value="{{ $book->datadepublicação }}">
        </div>

        <div class="form-group">
            <label for="publisher">Edição</label>
            <input type="text" class="form-control" id="edicao" name="edicao" value="{{ $book->edicao }}">
        </div>


        <div class="form-group">
            <label for="publisher">Editora</label>
            <input type="text" class="form-control" id="editora" name="editora" value="{{ $book->editora }}">
        </div>
        <button type="submit" class="btn btn-primary">Salvar</button>