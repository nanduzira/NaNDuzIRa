<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Todo;

class todoController extends Controller
{
    //
    public function index() {
        return view('todo');
    }
    public function show(Request $request) {
        $todos = new Todo;
        echo $todos->where('name','Anand')->get();
    }
}
