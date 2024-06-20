<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Book;

class LivrosController extends Controller
{
    public function dashboard()
    {
        $books = Book::all(); 
        return view('dashboard', compact('books'));
    }

    public function create()
    {   
        $book = new Book();
        return view('create', compact('book'));
    }

    public function store(Request $request)
{
    $request->validate([
        'titulo' => 'required|string|max:255',
        'subtitulo' => 'nullable|string|max:255',
        'autor' => 'required|string|max:255',
        'datadepublicacao' => 'required|date', 
        'edicao' => 'required|string|max:50',
        'editora' => 'required|string|max:255',
    ]);

    $book = new Book();
    $book->titulo = $request->titulo;
    $book->subtitulo = $request->subtitulo;
    $book->autor = $request->autor;
    $book->datadepublicacao = $request->datadepublicacao;
    $book->edicao = $request->edicao;
    $book->editora = $request->editora;
    $book->save();

    return redirect()->route('dashboard')
                     ->with('success', 'Livro adicionado com sucesso!');
}


    public function edit($id)
    {
        $book = Book::findOrFail($id);
        return view('edit', compact('book'));
    }

    public function update(Request $request, $id)
{
    $request->validate([
        'titulo' => 'required|string|max:255',
        'subtitulo' => 'nullable|string|max:255',
        'autor' => 'required|string|max:255',
        'datadepublicacao' => 'required|date', 
        'edicao' => 'required|string|max:50',
        'editora' => 'required|string|max:255',
    ]);

    $book = Book::findOrFail($id);
    $book->titulo = $request->titulo;
    $book->subtitulo = $request->subtitulo;
    $book->autor = $request->autor;
    $book->datadepublicacao = $request->datadepublicacao;
    $book->edicao = $request->edicao;
    $book->editora = $request->editora;
    $book->save();

    return redirect()->route('dashboard')
                     ->with('success', 'Livro atualizado com sucesso!');
}


    public function destroy($id)
    {
        $book = Book::findOrFail($id);
        $book->delete();

        return redirect()->route('dashboard')
                         ->with('success', 'Livro excluído com sucesso!');
    }

    
} 