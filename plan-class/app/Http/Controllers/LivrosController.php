<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
namespace App\Http\Controllers;
use App\Models\Book;

class LivrosController extends Controller
{
    public function dashboard()
    {
        $books = Book::all(); 
        return view('dashboard', ['books' => $books]);
    }
    public function create()
    {   
        $book = new Book();
        return view('dashboard', compact('book'));
    }

    public function store(Request $request)
    {
        $book = new Book();
        $book->titulo = $request->input('titulo');
        $book->autor = $request->input('autor');
        $book->datadepublicacao = $request->input('datadepublicacao');
        $book->edicao = $request->input('edicao');
        $book->editora = $request->input('editora');
        $book->save();
        return redirect()->route('dashboard');
    }

    public function edit($id)
    {
        $book = Book::find($id);
        return view('dashboard', compact('book'));
    }

    public function update(Request $request, $id)
    {
        $book = Book::find($id);
        $book->titulo = $request->input('titulo');
        $book->autor = $request->input('autor');
        $book->datadepublicacao = $request->input('datadepublicacao');
        $book->edicao = $request->input('edicao');
        $book->editora = $request->input('editora');
        $book->save();
        return redirect()->route('dashboard');
    }

    public function destroy($id)
    {
        $book = Book::find($id);
        $book->delete();
        return redirect()->route('dashboard');
    }

    
}
