<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class profile extends Model
{
    use HasFactory;
    protected $tables = "profiles";
    protected $primaryKey = "id";
    protected $guarded = [''];
    protected $keyType = "string";
}
