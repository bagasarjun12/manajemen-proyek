<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Fitur;
use App\Models\Programmer;
use App\Models\Project;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class ProgrammerController extends Controller
{
    public function progres(){
        return view('programmer.progres',[
            'projects' => Project::where('status',"verifikasi")->get()
        ],[
            'project_finish' => Project::where('persentase',"100%")->get()
        ]
        );
    }

    public function detail($id){
        return view('programmer.detail',[
            'fiturs' => Fitur::where('project_id',"$id")->get()
        ]
        );
    }

    public function update(Request $request, $id){
        $fitur           = Fitur::find($id);
        $fitur->keterangan   = $request['ket'];
        $fitur->link_git  = $request['linkgit'];
        $fitur->gambar   = $request['inputimg'];
        $fitur->save();

        return redirect()->back()->with('success', 'Progres Berhasil Diupdate!!');
    }
}
