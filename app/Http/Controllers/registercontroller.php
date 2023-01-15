<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class registercontroller extends Controller
{
    public function save(Request $requset){
        if(Auth::check()) {
            return redirect()->to(route('user.quiz'));
        }

        $validateFields = $requset->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if(User::where('email', $validateFields['email'])->exists()){
            return redirect()->to(route('user.registration'))->withErrors([
                'email' => 'Пользователь с таким e-mail\'ом уже зарегистрирован'
            ]);
        }

        $user = User::create($validateFields);
        if($user) {
            Auth::login($user);
            return redirect()->to(route('user.quiz'));
        }

        return redirect()->to(route('user.login'))->withErrors([
            'formError' => 'Ошибка при попытке сохранения данных пользователя!'
        ]);
    }
}
