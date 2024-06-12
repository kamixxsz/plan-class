@extends('layouts.app')

@section('content')
    <h1>Adicionar Livro</h1>
    <form method="POST" action="{{ route('books.store') }}">
        @csrf
        <div class="form-group">
            <label for="title">Título</label>
            <input type="text" class="form-control" id="title" name="title">
        </div>
        <div class="form-group">
            <label for="author">Autor</label>
            <input type="text" class="form-control" id="author" name="author">
        </div>
        <div class="form-group">
            <label for="publisher">Editora</label>
            <input type="text" class="form-control" id="publisher" name="publisher">
        </div>
        <button type="submit" class="btn btn-primary">Adicionar</button>
    </form>
@endsection