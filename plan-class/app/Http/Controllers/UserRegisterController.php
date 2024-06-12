<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rules\Password;
 
class UserRegisterController extends Controller
{
    public function store(Request $request)
    {
        Validator::make($request->all(), [
            'name' => ['required', 'string'],
            'email' => ['required', 'email'],
            'password' => ['required', 'confirmed', Password::min(8)],
        ])->validate();

        $user = User::create($request->all());
        return redirect()->route('login');
    }
}
