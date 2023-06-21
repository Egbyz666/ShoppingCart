<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\profile;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;

class ProfileController extends Controller
{
    //
    function show(){
        $data['profile'] = profile::all();
        return view('shoppingCart',$data);
    }

    function add(){
        $data=[
            'action'=>url('profile/create'),
            'tombol'=>'simpan',
            'profile'=>(object)[
                'id'=>'',
                'namaToko'=>'',
                'foto'=>'',
                'slogan'=>''
            ]
        ];
        return view('inputEditProfile',$data);
    }

    function create(Request $eg){

        profile::create([
            'namaToko'=>$eg->namaToko,
            'slogan'=>$eg->slogan,
            'foto'=>$eg->file('foto')->store('photoProfile')
            
        ]);
        return redirect('produk');
    }

    function edit($item){
        $data['profile']=Profile::find($item);
        $data['action']= url('profile/update').'/'.$data['profile'] -> id;
        $data['tombol']='update';
        return view('inputEditProfile',$data);
    }
    function update(Request $req){
        if ($req->file('foto')){
            $profile = profile::where('id',$req->item)->first();
            Storage::delete($profile -> foto);

            $file = $req->file('foto')->store('photoProfile');
        }else{
            $file=DB::raw('photoProfile');
        }

        profile::where('id',$req->item)->update([
            'namaToko'=>$req->namaToko,
            'slogan'=>$req->slogan,
            'foto'=> $file
        ]);
        return redirect('produk');
    }
}
