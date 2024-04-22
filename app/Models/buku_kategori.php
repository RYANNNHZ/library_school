<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class buku_kategori extends Model
{
    use HasFactory;


    protected $guarded = ['id','created_at','updated_at'];
}
