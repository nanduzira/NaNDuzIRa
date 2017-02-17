<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class proController extends Controller
{
    //
    public function index() {
        return view('mul');
    }
    public function mul(Request $request) {
        return view('pro',['prod'=>$request->number1*$request->number2]);

    }
}
