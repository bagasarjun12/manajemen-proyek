<?php

namespace App\Http\Controllers;

use App\Models\Fitur;
use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\Programmer;
use App\Models\User;


class ProjectController extends Controller
{
    public function store(Request $request){
        $validateData = $request->validate([
             'opsi' => 'required',
             'project' => 'min:0',
             'nama_project' => 'required|unique:projects',
             'jenis' => 'required',
             'deskripsi' => 'required',
             'pengaju' => 'required',
             'target' => 'required|date',
             'mulai' => 'required|date',
             'penginput' => 'required',
             'status' => 'required'
         ]);
         Project::create($validateData);
          return redirect()->back()->with('success', 'Project Successfully Created!!');
     }
     public function addprog(Request $request){
        
        $validateData = $request->validate([
            'user_id' => 'required',
            'project_id' => 'required'
        ]);
        Programmer::create($validateData);
        return redirect()->back()->with('success', 'Programmer Successfully Created!!');
     }
     public function destroy($id){
        $post   = Programmer::find($id);
        $post->delete();
         return redirect()->back()->with('success', 'Programmer has been deleted!!');
    }
    public function addfit(Request $request){
        $validateData = $request->validate([
            'user_id' => 'required',
            'project_id' => 'required',
            'nama_fitur' => 'required',
            'nama_file' => 'mimes:doc,docx,pdf,xls,xlsx,pdf,ppt,pptx'
        ]);

        if($request->file('nama_file')){
            $validateData['nama_file'] = $request->file('nama_file')->store('post-document');
        }

        Fitur::create($validateData);
        return redirect()->back()->with('success', 'Fitur Successfully Created!!');
     }
     public function destroyfit($id){
        $post   = Fitur::find($id);
        $post->delete();
         return redirect()->back()->with('success', 'Fitur has been deleteed!!');
    }
}
