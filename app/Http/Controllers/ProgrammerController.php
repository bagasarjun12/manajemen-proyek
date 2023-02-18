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
            'project_finish' => Project::where('status',"finish")->get()
        ]
        );
    }

    public function detail($id){
        return view('programmer.detail',[
            'fiturs' => Fitur::where('project_id',"$id")->get(),
            'projects' => Project::where('id',"$id")->get(),
            'programmer' => Programmer::where('project_id',"$id")->get()
        ]
        );
    }

    public function update(Request $request, $id){
        $fitur           = Fitur::find($id);
        $fitur->status = "1";
        $fitur->keterangan   = $request['ket'];
        $fitur->link_git  = $request['linkgit'];
        $fitur->gambar   = $request['inputimg'];
        $fitur->uploader = $request['user'];
        $fitur->tgl_update = date("Y/m/d h:i:s");
        $fitur->save();

        //fungsi menghitung persentase project
        $countselesai = Fitur::where('project_id',"$fitur->project_id")
                ->where('status', '=', "1")
                ->get();
        $fiturselesai = $countselesai->count();

        $countfitur = Fitur::where('project_id',"$fitur->project_id")
                ->get();
        $jumlahfitur = $countfitur->count();

$persentase = ($fiturselesai / $jumlahfitur) * 100;
$persen = $persentase."%";
        // end of fungsi menghitung persentase project

        $project           = Project::find($fitur->project_id);
        $project->persentase = $persen;
        $project->save();

        return redirect()->back()->with('success', 'Progres Berhasil Diupdate!!');
    }
}
