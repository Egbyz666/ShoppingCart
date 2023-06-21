<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\pemesanan;

class PemesananController extends Controller
{
    //
    function show(){
        $data['pemesanan'] = pemesanan::all();
        return view('pemesanan',$data);
    }

    function add(){
        $data =[
            'action' => url('pemesanan/create'),
            'tombol'=>'simpan',
            'pemesanan'=>(object)[
                'id'=>'',
                'namaProduk'=>'',
                'harga'=>'',
                'namaPembeli'=>'',
                'alamatPembeli'=>'',
                'waPembeli'=>'',
                'quantity'=>'',
            ]

            ];
            return view('pemesanan/create',$data);
    }
    function create(Request $eg){
        pemesanan::create([
            'id'=>$eg->id,
            'namaProduk'=>$eg->namaProduk,
            'harga'=>$eg->harga,
            'namaPembeli'=>$eg->namaPembeli,
            'alamatPembeli'=>$eg->alamatPembeli,
            'waPembeli'=>$eg->waPembeli,
            'quantity'=>$eg->quantity
        ]);
        return redirect('shoppingCart');
    }

}
