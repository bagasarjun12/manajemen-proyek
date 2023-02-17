<?php

namespace App\Http\Controllers;

use App\Models\Fitur;
use App\Models\Project;
use App\Models\User;
use App\Models\Programmer;
use Illuminate\Http\Request;

class KoordinatorController extends Controller
{
    public function index(){
        return view('koordinator.listkoordinator',[
            'users' => User::where('role',"koordinator")->get()
        ]
        );
    }
    public function index2(){
        return view('koordinator.listpimpinan',[
            'users' => User::where('role',"pimpinan")->get()
        ]
        );
    }
    public function index3(){
        return view('koordinator.listprogrammer',[
            'users' => User::where('role',"programmer")->get()
        ]
        );
    }
    public function index4(){
        return view('koordinator.listbpa',[
            'users' => User::where('role',"BPA")->get()
        ]
        );
    }
    public function viewproject(){
        $project = Project::where('status',"verifikasi")->get();
        $project2= Project::where('status',"finish")->get();
        return view('koordinator.projectpage')->with('projects', $project)->with('projects2', $project2);
    }
    public function show($id){
        $project   = Project::whereId($id)->first();
        $users = User::where('role',"programmer")->get();
        $programmer = Programmer::where('project_id',"$id")->get();
        $fitur = Fitur::where('project_id',"$id")->get();
        return view('koordinator.detailverifikasi', compact('users'))->with('projects', $project)->with('programmers', $programmer)
                                                                     ->with('fiturs', $fitur) ;
}

}
