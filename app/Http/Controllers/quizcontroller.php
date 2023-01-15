<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class quizcontroller extends Controller
{
    public function submit(Request $requset) {
        $validateFields = $requset->validate([
            'name' => 'required|min:5',
            'carMark' => 'required',
            'whyCar' => 'required|min:10',
            'automatic' => 'required',
            'mechanic' => 'required',
            'exp' => 'required|min:1',
            'comment' => 'required|min:0'
        ]);

        $name = $requset->name;
        $carMark = $requset->carMark;
        $whyCar = $request->whyCar;
        $automatic = $request->automatic;
        $mechanic = $request->mechanic;
        $exp = $request->exp;
        $comment = $request->comment;

        return DB::table('quiz_answers')->insert([
            'name' => $name,
            'carMark' => $carMark,
            'whyCar' => $whyCar,
            'automatic' => $automatic,
            'mechanic' => $mechanic,
            'exp' => $exp,
            'comment' => $comment
        ]);
    }
}
