<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('main');
});

Route::name('user.')->group(function() {
    Route::view('/quiz', 'quiz')->middleware('auth')->name('quiz');

    Route::get('/login', function() {
        if(Auth::check()) {
            return redirect(route('user.quiz'));
        }
        return view('login');
    })->name('login');

    Route::post('/login', [\App\Http\Controllers\logincontroller::class, 'login']);

    Route::get('/logout', function(){
        Auth::logout();
        return redirect('/');
    })->name('logout');

    Route::get('/registration', function(){
        if(Auth::check()) {
            return redirect(route('user.quiz'));
        }
        return view('registration');
    })->name('registration');

    Route::post('/registration',[\App\Http\Controllers\registercontroller::class, 'save']);

});

Route::get('quiz/submit', [\App\Http\Controllers\quizcontroller::class, 'submit']);
