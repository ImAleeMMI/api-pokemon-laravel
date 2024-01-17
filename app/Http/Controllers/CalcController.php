<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalcController extends Controller
{
    public function index()
    {
        return view('somma');
    }

    public function calculate(Request $request)
    {
        $number1 = $request->input('numbero1');
        $number2 = $request->input('numbero2');
        $somma = $number1 + $number2;

        return view('result', compact("somma"));
    }
}
