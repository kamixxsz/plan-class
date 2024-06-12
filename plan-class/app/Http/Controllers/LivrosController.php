<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LivrosController extends Controller
{   
    public function dashboard(){
        $user = auth()->user();
        $livros = $user->livros;
        return view('dashboard',['livros' => $livros]);
    }
}
