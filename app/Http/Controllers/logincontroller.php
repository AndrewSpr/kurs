<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class logincontroller extends Controller
{
    public function login(Request $request) {
        if(Auth::check()) {
            return redirect()->to(route('user.quiz'));
        }

        $formFields = $request->only(['email', 'password']);

        if(Auth::attempt($formFields)) {
            return redirect()->intended(route('user.quiz'));
        };

         
        return redirect()->to(route('user.login'))->withErrors([
            'email' => 'Авторизация не удалась. Проверьте ваш логин, или пароль'
        ]);
    }
}
