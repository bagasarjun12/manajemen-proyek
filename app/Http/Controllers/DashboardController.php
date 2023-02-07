<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function koor(){
        return view('koordinator/dashboard');
    }

    public function prog(){
        return view('programmer/dashboard');
    }

    public function BPA(){
        return view('koordinator/dashboard');
    }

    public function pemimpin(){
        return view('pimpinan/dashboard');
    }

}
