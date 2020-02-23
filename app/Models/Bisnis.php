<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Bisnis extends Model
{
    //
    protected $table = 'bisnis';
    protected $fillable = [
        'name', 'email', 'website', 'alamat', 'longitude', 'latitude',
        'kabupaten_id', 'galeri', 'informasi', 'no_telepon', 'kategori_id'
    ];
    public function kabupaten()
    {
        return $this->belongsTo(Kabupaten::class, 'kategori_id');
    }

    public function kategori()
    {
        return $this->belongsTo(Kategori::class, 'kabupaten_id');
    }

}
