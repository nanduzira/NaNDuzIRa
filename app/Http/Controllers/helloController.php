<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class helloController extends Controller
{
    //just like java
    public function index() {
        return view('calc');
    }
    public function add(Request $request) {
        $res = $request->number1+$request->number2;
        return view('sum',['result'=>$res]);

    }
}
