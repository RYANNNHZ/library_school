<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kategori extends Model
{
    use HasFactory;

    protected $guarded = ['id','created_at','updated_at'];


    public function buku()
    {
        return $this->belongsToMany(buku::class, 'buku_kategori')->withTimestamps();
    }

}
