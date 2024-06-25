<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\User;

class LivrosController extends Controller
{
    public function dashboard()
    {
        $user = auth()->user(); 
        $books = Book::where('id_user', $user->id)->get();
        $books = Book::paginate(10); 
    
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
        'capa_livro' => 'nullable|image|max:2048', 
    ]);

    $user = auth()->user(); 

    $book = new Book();
    $book->id_user = $user->id; 
    $book->titulo = $request->titulo;
    $book->subtitulo = $request->subtitulo;
    $book->autor = $request->autor;
    $book->datadepublicacao = $request->datadepublicacao;
    $book->edicao = $request->edicao;
    $book->editora = $request->editora;

    if ($request->hasFile('capa_livro')) {
        $image = $request->file('capa_livro');
        $imageName = time() . '_' . $image->getClientOriginalName();
        $image->move(public_path("img"), $imageName);
        // $image->storeAs('public/capas', $imageName); 
        $book->capa_livro = 'img/' . $imageName; 
    }

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

    public function destroy($id)  {
        $book = Book::findOrFail($id);
        $book->delete();

        return redirect()->route('dashboard')
                         ->with('success', 'Livro excluído com sucesso!');
    }
}
