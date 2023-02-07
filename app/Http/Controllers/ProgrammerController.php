<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProgrammerController extends Controller
{
    public function progres(){
        return view('programmer/progres');
    }

    public function detail(){
        return view('programmer/detail');
    }
}
