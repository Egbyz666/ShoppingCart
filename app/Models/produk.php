<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class produk extends Model
{
    use HasFactory;
    protected $tables = "produks";
    protected $primaryKey = "id";
    protected $guarded = [''];
    protected $keyType = "string";
    protected $fillable =['foto','harga','deskripsiProduk','kategoriProduk','namaProduk'];
}
