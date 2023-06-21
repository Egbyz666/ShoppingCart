<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    //
    function auth(Request $req){
        $y = $req->only('email','password');
        if(Auth::attempt($y)){
            return redirect('produk');
        }
        return redirect()->back();
    }

    function daftar(){
        return view('register');
    }

    function create(Request $req){
        $validate = $this->validate($req,[
            'name'=>'required|string',
            'email'=>'required|email',
            'password'=>'required|min:5'
        ]);
        $validate['password']=bcrypt($req->password);
        User::create($validate);
        return redirect('/');
    }

    function logout(){
        auth::logout();
        return redirect('/');
    }

    function view($id){
        $data['users'] = User::find($id);
        return view('produk',$data);
    }
}
