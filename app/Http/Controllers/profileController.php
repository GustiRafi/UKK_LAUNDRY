<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\outlet;
use App\Models\user;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class profileController extends Controller
{
    public function index(){
        return view('profile',[
            'outlet' => outlet::where('id',Auth::user()->id)->first(),
        ]);
    }


    public function edit_username(Request $request,$id){
        $validate = $request->validate([
            'name' => ['required'],
            'username' => ['required'],
            'email' => ['email','required']
        ]);

        user::where('id',$id)->update($validate);
        return response('berhasil');
    }


    public function edit_pass(Request $request,$id){
        if(!Hash::check($request->curentpass, Auth::user()->password)){
            return response()->json(['title'=> 'Gagal','msg' => 'Gagal memperbarui password,silahkan coba beberapa saat','sts'=> 'error']);
        }
        if(Hash::check($request->curentpass,Auth::user()->password))
        {
            $validate['password'] = Hash::make($request->newpass);
            user::where('id',$id)->update($validate);

            return response()->json(['title'=> 'Berhasil','msg' => 'Berhasil memperbarui password','sts'=> 'success']);
        }
    }
}
