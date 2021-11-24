<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    //
    public function login(Request $request){

        $rules = [
            'username' => ['required'],
            'password' => ['required'],
        ];

        $messages = [
            'required' => 'Harus diisi',
        ];

        $request->validate($rules, $messages);
        if (Auth::attempt(['username' => $request->username, 'password' => $request->password])){
            $request->session()->regenerate();
            return redirect()->intended('home');
        } else {
            return back()->withErrors([
                'error' => 'Username atau password salah',
            ]);
        }
    }
}
