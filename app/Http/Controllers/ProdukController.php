<?php

namespace App\Http\Controllers;

use App\Models\produk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;

class ProdukController extends Controller
{
    //
    function show(){
        $data['produk'] = produk::all();
        return view('produk',$data);
    }

    function view($item){
        $data['produk']=Produk::find($item);
        $data['action']= url('produk/view').'/'.$data['produk'] -> id;
        $data['tombol']='View';
        
        return view('viewOption',$data);
    }

    function add(){
        $data=[
            'action'=>url('produk/create'),
            'tombol'=>'simpan',
            'produk'=>(object)[
                'id'=>'',
                'namaProduk'=>'',
                'kategoriProduk'=>'',
                'deskripsiProduk'=>'',
                'harga'=>'',
                'foto'=>''
            ]
        ];
        return view('inputProduk',$data);
    }
   
    function create(Request $eg){
        produk::create([
                'namaProduk'=>$eg->namaProduk,
                'kategoriProduk'=>$eg->kategoriProduk,
                'deskripsiProduk'=>$eg->deskripsiProduk,
                'harga'=>$eg->harga,
                'foto'=>$eg->file('foto')->store('photoproduk')
        ]);
        return redirect('produk');
    }

    function edit($item){
        $data['produk']=Produk::find($item);
        $data['action']= url('produk/update').'/'.$data['produk'] -> id;
        $data['tombol']='update';
        return view('inputProduk',$data);
    }
    function update(Request $req){
        if ($req->file('foto')){
            $produk = Produk::where('id',$req->id)->first();
            Storage::delete($produk -> foto);

            
            $file = $req->file('foto')->store('photoproduk');
        }else{
            $file=DB::raw('photoproduk');
        }

        Produk::where('id',$req->id)->update([
            'namaProduk' => $req -> namaProduk,
            'kategoriProduk' => $req -> kategoriProduk,
            'deskripsiProduk'=> $req -> deskripsiProduk,
            'harga'=> $req -> harga,
            'foto'=> $file
        ]);
        return redirect('produk');
    }

    function delete($item){
        $Produk = Produk::where('id', $item)->first();
        $Produk->delete();
        return redirect('produk');
    }
}
