<?php

namespace App\Http\Controllers;
use App\Models\profile;
use App\Models\produk;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    //
    function show(){
        $data['profile'] = profile::all();
        $data['produk'] = produk::all();
        return view('shoppingCart',$data);
    }

    function edit($id){
        $data['produk'] = produk::find($id);
        return view('viewOption',$data);
    }


}
