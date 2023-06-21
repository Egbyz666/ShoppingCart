<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pemesanan extends Model
{
    use HasFactory;
    protected $tables = "pemesanans";
    protected $primaryKey = "idPemesanan";
    protected $guarded = [''];
    protected $keyType = "string";
    protected $fillable =['namaProduk','harga','namaPembeli','alamatPembeli','waPembeli','quantity'];
}
