<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rules\Password;
 
class UserRegisterController extends Controller
{
    public function store(Request $request)
    {
    $validator = Validator::make($request->all(), [
        'name' => ['required' , 'string'],
        'email' => ['required' , 'email'],
        'password' => ['required', 'confirmed', Password::min(8)],]);
    if ($validator->fails()){
        return view('register')
        ->with(['errors' => $validator->errors()]);}
    }
}
