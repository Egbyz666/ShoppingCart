<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\produk;

class FormulirController extends Controller
{
    //
    function show(){
       
        $data['produk'] = produk::all();
        return view('formulirWa',$data);
    }
}
