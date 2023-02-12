<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AccountController extends Controller
{
    public function index(){
        return view('programmer.changepass');
    }

    public function confirmpass(Request $request){
        $id = Auth::id(); 
        $oldpass = $request['oldpass'];
        $User           = User::find($id);
        $User->getAuthPassword();
        if (Hash::check($oldpass, $User->password)) {
            $request['newpass1'] = Hash::make($request['newpass1']);
            $User->password = $request['newpass1'];
            $User->save();
            return redirect()->back()->with('success', 'Password Berhasil Diubah!');
        }else{
            return redirect()->back()->with('alert', 'Password Salah!');
        }
    }
    
    
}


