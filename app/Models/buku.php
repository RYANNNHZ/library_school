<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class buku extends Model
{
    use HasFactory;


    protected $guarded = ['id', 'created_at', 'updated_at'];

    public function kategori()
    {
        return $this->belongsToMany(kategori::class, 'buku_kategoris')->withTimestamps();
    }

    public function user()
    {
        return $this->belongsToMany(User::class, 'buku_koleksis');
    }

    public function userpinjam()
    {
        return $this->belongsToMany(User::class, 'peminjams');
    }
}
