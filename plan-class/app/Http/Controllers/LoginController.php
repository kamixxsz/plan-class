<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('login');
    }

    public function login(Request $request)
{
    $credenciais = $request->only('email', 'password');

    if (Auth::check()) {
        return redirect()->route('dashboard');
    }
    if (Auth::attempt($credenciais)) {
        $user = Auth::user();
        return redirect()->route('dashboard'); 
    } else {
        return redirect()->route('login')
            ->withInput($request->only('email')) 
            ->withErrors(['password' => 'Invalid password']);
    }
}
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
}

