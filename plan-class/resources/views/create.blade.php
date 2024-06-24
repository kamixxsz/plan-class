@extends('layout.layout', ['title' => 'Criar Livro'])

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
    <h3 class="login-name">CADASTRE SEUS LIVROS</h3>
    <form action="{{ route('store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="text" name="titulo" placeholder="Título do Livro" class="input1">
        <input type="text" name="subtitulo" placeholder="Subtítulo do Livro" class="input1">
        <input type="text" name="autor" placeholder="Autor do Livro" class="input1">
        <input type="date" name="datadepublicacao" placeholder="Data de Publicação" class="input1">
        <input type="text" name="edicao" placeholder="Edição do Livro" class="input1">
        <input type="text" name="editora" placeholder="Editora do Livro" class="input1">
        <div class="form-group">
            <label for="capa_livro">Capa do Livro</label>
            <input type="file" id="capa_livro" name="capa_livro" accept="image/*">
        </div>
        <button type="submit" class="button-sair">Salvar Livro</button>
    </form>
</div>

@endsection
